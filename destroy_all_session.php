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
    <h1>Destroy All Session</h1>
    <?php
    # unset the variables and destroy the session
    session_unset();
    session_destroy();

    echo "All Session variables are now removed and the session is destroyed.";
    echo '<p>Your session ID is: ' . session_id() . '</p>';
    echo '<p>Your current role is: ' . $_SESSION['role'] . '</p>';
    echo '<p>The version of browser is: ' . $_SESSION['browser'] . '</p>';
    ?>
    <br><br>
    <a href="create_session.php">Create Session</a>
    <a href="read_session.php">Read Session</a>
    <a href="destroy_session.php">Destroy Session</a>

</body>
</html>