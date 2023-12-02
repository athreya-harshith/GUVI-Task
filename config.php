<?php
define("DB_SERVER", "localhost");// in local repository 
define("DB_USERNAME", "root");//name of the user
define("DB_PASSWORD", "");// please provid the password for the database 
define("DB_NAME", "guvi_task");// name of the database
# Connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
# Checking the  connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
