<?php
//incluimos la clase PHPMailer
require_once( __DIR__ . '/../vendor/autoload.php' );

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

  class App 
  {

    public function emailCheck($email)
    { 
      $mail_correcto = 0; 
      //compruebo unas cosas primeras 
      if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){ 
           if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) { 
             //miro si tiene caracter . 
             if (substr_count($email,".")>= 1){ 
                 //obtengo la terminacion del dominio 
                 $term_dom = substr(strrchr ($email, '.'),1); 
                 //compruebo que la terminaci&oacute;n del dominio sea correcta 
                 if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){ 
                   //compruebo que lo de antes del dominio sea correcto 
                   $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
                   $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
                   if ($caracter_ult != "@" && $caracter_ult != "."){ 
                       $mail_correcto = 1; 
                   } 
                 } 
             } 
           } 
      } 
      if ($mail_correcto) 
        return 1; 
      else 
        return 0; 
    }

    function emptyInput($dato)
    {
      if ($dato==''){
        return true;
      } else {
        return false;
      }
    }

    public function verifyRecaptcha($post)
    {

      $token = $post['token'];
      $action = $post['action'];

      $cu = curl_init();
      curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
      curl_setopt($cu, CURLOPT_POST, 1);
      curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $_ENV['RECAPTCHA_KEY_SECRET'], 'response' => $token)));
      curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($cu);
      curl_close($cu);

      return $data = json_decode($response, true);

    }

    public function configureEmailSettings($mail) 
    {

      if ($_ENV['ENVIRONMENT'] === 'local') {
        $mail->isSendmail();
      } else {
        $mail->isSMTP();
      }

      //SERVER SETTINGS
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
      $mail->Host       = $_ENV['SMTP'];
      $mail->SMTPAuth   = true;
      $mail->Username   = $_ENV['EMAIL_CLIENT'];
      $mail->Password   = $_ENV['PASSWORD'];
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->CharSet = $_ENV['EMAIL_CHARSET'];
      $mail->Port       = $_ENV['EMAIL_PORT'];

    }

    public function configureEmailContent($mail, $subject, $template_email) 
    {

      //CONTENIDO
      $mail->isHTML(true);                                  
      $mail->Subject = $subject;
      $mail->Body    = $template_email;

    }

    public function setSenderAndRecipients($destinatario, $post, $mail) 
    {

      switch ($destinatario) {
        
        case 'Cliente':

          //ENVIOS
          $mail->setFrom($post['email'], $post['name']);
          $mail->addAddress($_ENV['EMAIL_CLIENT'], $_ENV['NAME_CLIENT']);     //Add a recipient
          $mail->addReplyTo($post['email'], $post['name']);
          break;
        
        case 'Usuario':

          //ENVIOS
          $mail->setFrom($_ENV['EMAIL_CLIENT'], $_ENV['NAME_CLIENT']);
          $mail->addAddress($post['email'], $post['name']);     //Add a recipient
          $mail->addReplyTo($_ENV['EMAIL_CLIENT'], $_ENV['NAME_CLIENT']);
          break;

      }

    }

    public function sendEmail($destinatario, $template, $post)
    {

      $mail = new PHPMailer();

      $this->setSenderAndRecipients($destinatario, $post, $mail);      

      switch ($template) {

        case 'Contacto Cliente':
          $template_email = $this->selectEmailTemplate($post, 'to_client');
          $subject = 'Nueva consulta desde el ' . $post['origin'];
          break;
        
        case 'Contacto Usuario':
          $template_email = $this->selectEmailTemplate($post, 'to_user');
          $subject = 'Gracias por tu contacto.';
          break;
        
      }

      $this->configureEmailSettings($mail);

      $this->configureEmailContent($mail, $subject, $template_email);

      //send the message, check for errors
      $send = $mail->send();

      return $send;

    }

    function setVariablesForEmailTemplate($post) {

      $vars = array(
        '{name_client}',
        '{email_client}',
        '{phone_client}',
        '{phone_show_client}',
        '{whatsapp_client}',
        '{whatsapp_show_client}',
        '{origin}',
        '{name_user}',
        '{email_user}',
        '{phone_user}',
        '{comments_user}',
        '{date}',
        '{base}'
      );

      $values = array( 
        $_ENV['NAME_CLIENT'],
        $_ENV['EMAIL_CLIENT'],
        $_ENV['PHONE_CLIENT'],
        $_ENV['PHONE_SHOW_CLIENT'],
        $_ENV['WHATSAPP_CLIENT'],
        $_ENV['PHONE_SHOW_CLIENT'],
        $post['origin'],
        $post['name'],
        $post['email'],
        $post['phone'],
        $post['comments'],
        date('d-m-Y'),
        BASE 
      );

      switch ( $post['origin'] ) {
        case 'Formulario de Distribuidores':
          array_push( $vars, '{zone_user}' );
          array_push( $values, $post['zone'] );
          break;

        case 'Formulario de Arquitectos':
          array_push( $vars, '{company_user}' );
          array_push( $values, $post['company'] );
      }

      return array($vars, $values);

    }

    function selectEmailTemplate($post, $to) 
    {

      $variables_for_template_email = $this->setVariablesForEmailTemplate($post);

      $vars = $variables_for_template_email[0];
      $values = $variables_for_template_email[1];

      switch ( $post['origin'] ) {
        case 'Formulario de Distribuidores':
          
          if ( $to === 'to_client') {
            $template = file_get_contents( __DIR__ . '/../includes/emails/distribuidores/distribuidores-to-client.php');
          } else {
            $template = file_get_contents( __DIR__ . '/../includes/emails/distribuidores/distribuidores-to-user.php');
          }
          break;

        case 'Formulario de Arquitectos':

          if ( $to === 'to_client') {
            $template = file_get_contents( __DIR__ . '/../includes/emails/arquitectos/arquitectos-to-client.php');
          } else {
            $template = file_get_contents( __DIR__ . '/../includes/emails/arquitectos/arquitectos-to-user.php');
          }
          break;
        
        default:
          if ( $to === 'to_client') {
            $template = file_get_contents( __DIR__ . '/../includes/emails/contacts/contacts-to-client.php');
          } else {
            $template = file_get_contents( __DIR__ . '/../includes/emails/contacts/contacts-to-user.php');
          }
          break;
      }
     
      //Remplazamos las variables por las marcas en los templates
      $template_final = str_replace($vars, $values, $template);

      return $template_final;

    }
   
  }

?>