<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<!-- Author: Allison Drake
Class: CTEC 227 PHP
Date: 4-26-2020
Assignment: Lab 1 Sessions -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drake CTEC 227 Lab No. 1</title></head>
<body>
    <h1>Destroy Session</h1>
<?php
session_unset();
?>
    <br><br>
    <a href="create_session.php">Create Session</a>
    <a href="read_session.php">Read Session</a>
    <a href="destroy_all_session.php">Destroy ALL Sessions</a>
  
</body>
</html>