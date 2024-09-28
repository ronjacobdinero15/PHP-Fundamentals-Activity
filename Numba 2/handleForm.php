<?php 
session_start();

// Check if a user is already logged in
if(isset($_SESSION['firstName'])) {
    // Store the current user's name in a session variable
    $currentUser = $_SESSION['firstName'];
    // Log out the current user
    session_unset();
    // Redirect to index.php with the current user's name
    header('Location: index.php?error=already_logged_in&currentUser=' . $currentUser);
    exit;
}

// Check if submitBtn exists
if(isset($_POST['submitBtn'])) {

    // Get the first name from index.php
    $firstName = $_POST['firstName'];

    // Get the password from the input field
    $password = md5($_POST['password']);

    $_SESSION['firstName'] = $firstName;
    $_SESSION['password'] = $password;

    // Go back to index.php
    header('Location: index.php');
}

?>