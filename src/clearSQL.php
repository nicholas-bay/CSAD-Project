<?php
  // preset variables
  $sqlservername = 'localhost';
  $sqlusername = 'root';
  $sqlpassword = 'root';
  $sqldatabase = 'usersDB';
  $sqltable = 'users';

  // create connection
  $conn = new mysqli($sqlservername, $sqlusername, $sqlpassword);
  
  // create database
  $sql = "DROP DATABASE IF EXISTS $sqldatabase";
  if ($conn->query($sql) === TRUE)
    echo "Cleared";
  else
    echo $conn->error;
?>