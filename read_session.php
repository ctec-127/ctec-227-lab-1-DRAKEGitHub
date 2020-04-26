<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drake CTEC 227 Lab No. 1</title></head>
<body>
    <h1>Read Session</h1>
    <?php
    echo '<p>Your session ID is: ' . session_id() . '</p>';
    echo '<p>Your current role is: ' . $_SESSION['role'] . '</p>';
    echo '<p>The version of browser is: ' . $_SESSION['browser'] . '</p>';
    echo 'The number of page views for create_session.php is: ' . $_SESSION['views'];
    ?>
    <br><br>
    <a href="create_session.php">Create Session</a>
    <a href="destroy_session.php">Destroy Session</a>
    <a href="destroy_all_session.php">Destroy ALL Sessions</a>
  
</body>
</html>