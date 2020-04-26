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
    <title>Drake CTEC 227 Lab No. 1</title>
</head>
<body>
<h1>Create Session</h1>
    <?php

    # check to see if session variable already exists
    if (!isset($_SESSION['views'])) {
        $_SESSION['views'] = 0;
    }

    # check to see if session variable already exists
    if (!isset($_SESSION['browser'])) {
        $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    }

    # check to see if session variable already exists
    if (!isset($_SESSION['role'])) {
        $_SESSION['role'] = 'admin';
    }
    ?>

    <?php

    echo '<p>Your session ID is: ' . session_id() . '</p>';
    echo '<p>Your current role is: ' . $_SESSION['role'] . '</p>';
    echo '<p>The version of browser is: ' . $_SESSION['browser'] . '</p>';

    # increment the session variable
    $_SESSION['views'] = $_SESSION['views'] + 1;

    echo 'The number of page views is: ' . $_SESSION['views'];

    ?>
    
    <br><br>
    <a href="read_session.php">Read Session</a>
    <a href="destroy_session.php">Destroy Session</a>
    <a href="destroy_all_session.php">Destroy ALL Sessions</a>
  
</body>
</html>
