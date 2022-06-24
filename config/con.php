<?php

$iscon = new mysqli('localhost', 'root', '123456');

if($iscon->connect_errno){

  echo $isconn->connect_errno. "Failed connection";

}  





$created = mysqli_query($iscon, "CREATE DATABASE IF NOT EXISTS pagebuilder") or die($iscon->error);

$db = mysqli_connect('localhost', 'root', '123456', 'pagebuilder');
if($created){

mysqli_query($db, "CREATE TABLE builder_data(
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(250) NOT NULL,
textname MEDIUMTEXT NOT NULL
)"
);

}





?>
