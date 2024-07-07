<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Complete</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Congratulations!</h1>
    <p>Your registration is successful.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
