<?php
// login.php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    //this for connection between my code and database
    $conn = new mysqli('localhost', 'root', '', 'student_app');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            header("Location: home.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found.";
    }

    $conn->close();
}
?>

<form method="POST" action="login.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    <button type="submit">Log In</button>
</form>
