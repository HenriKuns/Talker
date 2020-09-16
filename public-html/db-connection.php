<?php
require 'db-conn.inc.php';
 try {

     //DOCKER
     $connection = new PDO('mysql:host=mysql;dbname=talker_db', 'root', 'talker-root-password');

     //VAGRANT
     //$connection = new PDO('mysql:host=localhost;dbname=talker_db', 'root', 'root');

     //XAMPP
     //$connection = new PDO('mysql:host=localhost;dbname=talker_db', 'root', '');

     print "Success! Connected to the database!";

 } catch (PDOException $e) {
     print "Error!: " . $e->getMessage() . "<br/>";
     die();
 }

 echo '<tabel>';
 foreach ($connection->query('SELECT * FROM movies')as $record){
    echo '<tr>';
    echo '<td>' . $record['id'] . '</td>';
    echo '</tr>';
 }
 echo '</tabel>';
?>