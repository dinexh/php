<?php
// used to store values that can passed out throught many pages etc..
session_start();
// store session data
$_SESSION['username'] = 'JohnDoe';
$_SESSION['email'] = 'johndoe@example.com';
if (isset($_SESSION['username'])) {
    echo 'Logged in as ' . $_SESSION['username'];
} else {
    echo 'You are not logged in. <br>';
}
echo 'unsetting the the values';
unset($_SESSION['username']);
//for destroying the session
session_destroy();
?>
