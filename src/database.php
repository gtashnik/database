<?php

namespace gtashnik\database;// setting namespace

class Database {
    
public function theBase() {
        
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE db";
if ($conn->query($sql) === TRUE) {
   // echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$connection = new mysqli($servername, $username, $password, "db");
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// создаем таблицу и записываем данные
$sql2 = "CREATE TABLE sometext (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, text VARCHAR(256) NOT NULL)";

$make_table = mysqli_query($connection, $sql2);

$sql3 = "INSERT INTO sometext (text) VALUES ('Hello from Safarov')";

$insert_text = mysqli_query($connection, $sql3);

$sql4 = "SELECT * FROM sometext WHERE text = 'Hello from Safarov'";

$select_text = mysqli_query($connection, $sql4);

$row = mysqli_fetch_array($select_text);

$the_text = $row['text'];

return $the_text;

$connection->close(); 

    }
  

    
} // конец класса database