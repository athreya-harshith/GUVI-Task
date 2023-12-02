<?php
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "athreya@123");
define("DB_NAME", "guvi_task");
# Connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
# Checking the  connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
