<?php
  $name = $_POST['name'];
  $mail = $_POST['e-mail'];
  $message = $_POST['message'];

  $to = 'contato@colegiolirio.com.br';
  $subject = 'Contato pelo site';

  $headers = 'From: ' . $mail;

  $params = '';

  mail($to, $subject, $message, $headers, $params);

  if ($mail->send()) {
    header( "Location: 'index.php?sent=1'" );
  } else {
    header( "Location: 'index.php?sent=0'" );
  }
?>