<?php
	
  include('../includes/config.inc.php');
  include('../clases/app.php');
  
  require_once("../clases/repositorioSQL.php");

  $db = new RepositorioSQL();

	$app = new App;
	$data = $app->verifyRecaptcha($_POST);

	if($data['success'] == 1 && $data['score'] >= 0.5){

		if ( isset($_POST['current']) ) {
	  	$current = $_POST['current'];
	  } else {
	  	exit('Error inesperado, cargue la ´pagina nuevamente y vuelva a intentar.');
	  }

		// Verificamos si hay errores en el formulario
	  if ($app->emptyInput( $_POST['name'])) {
	    $errors['error_name']='Ingresa tu nombre';
	  } else {
	    $name = $_POST['name'];
	  }

	  if (!$app->emailCheck( $_POST['email'])) {
	    $errors['error_email']='Ingresa el mail :(';
	  } else {
	    $email = $_POST['email'];
	  }

	  if ($app->emptyInput( $_POST['phone'])) {
	    $errors['error_phone']='Ingresa tu teléfono';
	  } else {
	    $phone = $_POST['phone'];
	  }

	  if ( $app->emptyInput( isset($_POST['company']) ) && $current === 'arquitectos.php' ) {
	    $errors['error_company']='Ingresa tu empresa o razón social';
	  } else {
	    $company = isset( $_POST['company'] );
	  }

	  if ( $app->emptyInput( isset($_POST['zone']) ) && $current === 'distribuidores.php' ) {
	    $errors['error_zone']='Ingresa tu zaona de trabajo';
	  } else {
	    $zone = isset( $_POST['zone'] );
	  }

	  if ($app->emptyInput( $_POST['comments'])) {
	    $errors['error_comments']='Ingresa tu consulta';
	  } else {
	    $comments = $_POST['comments'];
	  }

	  if (!isset($errors)) {
	  	
	  	//grabamos en la base de datos
		  $save = $db->getRepoContacts()->saveContactFormContactInBDD($_POST);

		  //Enviamos los mails al cliente y usuario
		  $app = new App;

		  $sendClient = $app->sendEmail('Cliente', 'Contacto Cliente', $_POST);
		  $sendUser = $app->sendEmail('Usuario', 'Contacto Usuario', $_POST);

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

	  	$phone = $_POST['phone'];
	  	header("Location: " . BASE . $current . "?name=$name&email=$email&phone=$phone&last_name=$last_name&errors=" . urlencode(serialize($errors)) . "#error");
	  	exit;

	  }
	  
  } else {
  	
  	// Robot
  	$errors['robot'] = 'Error. Por favor intente nuevamente';
  	header("Location: " . BASE . $current . "?errors=" . urlencode(serialize($errors)) . "#error");
  	exit;
	}





