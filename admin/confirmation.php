<?php
require_once "model/Admin.php"; // include model

if (isset($_POST['loginAdmin'])) {

    // Get input from form
    $inputUsername = $_POST['name'];
    $inputPassword = $_POST['pass'];

    // Create admin object
    $admin = new admin();

    // Check if credentials match
    if (
        $inputUsername === $admin->username &&
        $inputPassword === $admin->password
    ) {
        echo "Login successful!";
        header("Location: admin.php");
    } else {
        echo "Invalid username or password";
    }
}
?>