<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy credentials for demonstration
    if ($username == 'dinesh' && $password == '123456789') {
        $_SESSION['username'] = $username;
        header('Location: home.php');
    } else {
        echo 'Invalid credentials';
    }
}
?>
<form method="post" action="">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
