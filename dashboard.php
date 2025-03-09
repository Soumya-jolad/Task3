<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background: #f4f4f4; }
    </style>
</head>
<body>
    <h2>Welcome to the Dashboard</h2>
    <a href="logout.php">Logout</a>
</body>
</html>
