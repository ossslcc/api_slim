<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$container['phpmailer'] = function($c) {
  $smtp_config = $c->settings['config']['smtp'];
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->SMTPDebug  = $smtp_config["SMTPDebug"];
  $mail->Host       = $smtp_config["Host"];
  $mail->SMTPAuth   = $smtp_config["SMTPAuth"];
  $mail->Username   = $smtp_config["Username"];
  $mail->Password   = $smtp_config["Password"];
  $mail->SMTPSecure = $smtp_config["SMTPSecure"];
  $mail->Port       = $smtp_config["Port"];
  $mail->isHTML(true);
  $mail->setFrom($smtp_config["from"]["email"], $smtp_config["from"]["name"]);
  return $mail;
};
