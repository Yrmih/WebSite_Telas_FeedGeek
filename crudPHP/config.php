<?php
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root"); #usuario padrao do phpmyadmin
define("DB_PASSWORD", ""); #senha padrao do phpmyadmin
define("DB_NAME", "registered");

# Connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

# Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
