<?php
$config = array(
  "settings" => array(
      "url_base" => "http://.../"
  ),
  "smtp" => array(
    "SMTPDebug"   => 2,
    "Host"        => "....cl",
    "SMTPAuth"    => true,
    "Username"    => "account_system@....cl",
    "Password"    => "...",
    "SMTPSecure"  => "SSL",
    "Port"        => 587,
    "from"        => array(
      "email"         => "account_system@....cl",
      "name"          => "Accounts System"
    )
  ),
  "dbs" => array(
    "confirmations" => array(
      "host"      => "...",
      "dbname"    => "...",
      "username"  => "...",
      "password"  => "..."
    ),
    // ...
  )
);
