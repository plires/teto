<?php
	
  include('../includes/config.inc.php');
  include('../includes/sanitization.php');
  include('../clases/app.php');
  
  require_once("../clases/repositorioSQL.php");

  // Sanitizacion de inputs
	$inputs = [
    'origin' => $_POST['origin'],
    'current' => $_POST['current'],
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'comments' => $_POST['comments'],
    'token' => $_POST['token'],
    'action' => $_POST['action']
	];

	$fields = [
    'origin' => 'string',
    'current' => 'string',
    'name' => 'string',
    'email' => 'email',
    'phone' => 'string',
    'comments' => 'string',
    'token' => 'string',
    'action' => 'string'
	];

	$data = sanitize( $inputs, $fields );

  $db = new RepositorioSQL();

	$app = new App;
	$recaptcha = $app->verifyRecaptcha($data);

	if($recaptcha['success'] == 1 && $recaptcha['score'] >= 0.5){

		if ( isset( $_POST['current'] ) ) {
	  	$current = $data['current'];
	  } else {
	  	exit('Error inesperado, cargue la página nuevamente y vuelva a intentar.');
	  }

		// Verificamos si hay errores en el formulario
	  if ($app->emptyInput( $_POST['name']) ) {
	    $errors['error_name']='Ingresa tu nombre';
	  } else {
	    $name = $data['name'];
	  }

	  if (!$app->emailCheck( $_POST['email'])) {
	    $errors['error_email']='Ingresa el mail :(';
	  } else {
	    $email = $data['email'];
	  }

	  if ($app->emptyInput( $_POST['phone'])) {
	    $errors['error_phone']='Ingresa tu teléfono';
	  } else {
	    $phone = $data['phone'];
	  }

	  if ($app->emptyInput( $_POST['comments'])) {
	    $errors['error_comments']='Ingresa tu consulta';
	  } else {
	    $comments = $data['comments'];
	  }

	  if (!isset($errors)) {

	  	//grabamos en la base de datos
		  $save = $db->getRepoContacts()->saveContactFormContactInBDD($data);

		  //Enviamos los mails al cliente y usuario
		  $app = new App;

		  $sendClient = $app->sendEmail('Cliente', 'Contacto Cliente', $data);
		  $sendUser = $app->sendEmail('Usuario', 'Contacto Usuario', $data);

		  if ($sendClient) {
		  	
		  	$msg_contacto = 'Mensaje recibido. Le contestaremos a la brevedad. Muchas gracias!';
		    header("Location: " . BASE . $current . "?msg_contacto=". urlencode($msg_contacto) . "#msg_contacto" );
	  		exit;

		  } else {

		  	$errors['mail'] = 'Error al enviar la consulta, por favor intente nuevamente';
		  	header("Location: " . BASE . $current . "?errors=" . urlencode(serialize($errors)) . "#error");
		  	exit;

		  }

	  } else {

	  	$phone = $data['phone'];
	  	header("Location: " . BASE . $current . "?name=$name&email=$email&phone=$phone&last_name=$last_name&errors=" . urlencode(serialize($errors)) . "#error");
	  	exit;

	  }
	  
  } else {
  	
  	// Robot
  	$errors['robot'] = 'Error. Por favor intente nuevamente';
  	header("Location: " . BASE . $current . "?errors=" . urlencode(serialize($errors)) . "#error");
  	exit;
	}





