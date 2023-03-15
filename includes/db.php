<?php
ob_start();
session_start();
// define("HOSTNAME", "localhost");
// define("USERNAME", "root");
// define("PASSWORD", "");
// define("DATABASE", "service_request");

define("HOSTNAME", "localhost");
define("USERNAME", "u777165711_sigrequest");
define("PASSWORD", "Calidog2023!");
define("DATABASE", "u777165711_sigrequest");


  $dsn = "mysql:host=localhost;dbname=u777165711_sigrequest;port=3306;charset=utf8";

  $opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
  ];
  $pdo = new PDO($dsn, 'u777165711_sigrequest', 'Calidog2023!', $opt);
  $root_directory = "login-pro";
  $from_email = "admin@richardstiehm.com";
  $reply_email = "admin@richardstiehm.com";
  $approot = "http://localhost/sig-request"
?>

