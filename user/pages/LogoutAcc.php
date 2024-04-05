<?php
    session_start();
    // if (isset($_POST['signout'])) {
    unset($_SESSION['Account']);
    header('location: introduction.php');
    // }
?>