<?php

  $json = file_get_contents('../../json/variables.json');
  $json_data = json_decode($json, true);
  $servername = $json_data["servername"];
  $username = $json_data["username"];
  $password = $json_data["password"];
  $database = $json_data["database"];

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
