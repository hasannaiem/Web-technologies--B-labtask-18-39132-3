<?php

$conn = new mysqli("localhost", "root", "", "updatelab");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql1 = "CREATE DATABASE UPDATE";
if ($conn->query($sql1) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}



$sql2 = "CREATE TABLE `updatelab`.`updatequery` (`id` INT NOT NULL , `firstname` VARCHAR(52) NOT NULL , `lastname` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

if ($conn->query($sql2) === TRUE) {
  echo "Table UP created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$sql3 = "INSERT INTO updateQuery (firstname, lastname, email)
VALUES ('Naiemul', 'hasan', 'naem@gmail.com')";

if ($conn->query($sql3) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql4 = "UPDATE updateQuery SET firstname='Naiemul Hasan', lastname='Naiem', email='n3mo@gmail.com' WHERE id=2";

if ($conn->query($sql4) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


$sql5 = "DELETE FROM `updatequery`  WHERE id=2";

if ($conn->query($sql4) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error updating record: " . $conn->error;
}






$conn->close();




?>