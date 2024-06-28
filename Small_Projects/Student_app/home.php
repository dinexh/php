<?php
// home.php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <nav>
        Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!
    </nav>
    <h1>Welcome to the Student App!</h1>
</body>
</html>
