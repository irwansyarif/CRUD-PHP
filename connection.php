<?php
$connect = new mysqli("localhost","root","","latihan");

// Check connection
if ($connect -> connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}



?>