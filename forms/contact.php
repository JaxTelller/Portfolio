<?php

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'ivan-i99@inbox.ru';

  if( file_exists($php_email_form = '../assets/other/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];


  $contact->smtp = array(
    'host' => 'smtp.mail.ru',
    'username' => 'ivan-i99@inbox.ru',
    'password' => 'P4Yywze6#nZdQR',
    'port' => '465'
  );


  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['phone'], 'Phone');
  $contact->add_message( $_POST['message'], 'Message', 10);
  /*$contact->add_message( $_POST['datetime'], 'Date and Time');*/
  echo $contact->send();
?>
