<?php
session_start();

// Clear the session
$_SESSION = array(); // Or use session_unset();

// Destroy the session
session_destroy();

// Redirect to login page or home page
header("Location: login.php");
exit;
