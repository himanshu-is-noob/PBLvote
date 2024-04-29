<?php
session_start();

// Predefined credentials
$valid_mobile1 = "123";
$valid_aadhaar1 = "123";
$valid_password1 = "123";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['mobile1']) && isset($_POST['aadhaar1']) && isset($_POST['password1'])) {
        $mobile1 = $_POST['mobile1'];
        $aadhaar1 = $_POST['aadhaar1'];
        $password1 = $_POST['password1'];
        
        // Check if entered credentials match the predefined credentials
        if ($mobile1 === $valid_mobile1 && $aadhaar1 === $valid_aadhaar1 && $password1 === $valid_password1) {
            // Set session variables for successful login
            $_SESSION['loggedin'] = true;
            $_SESSION['mobile1'] = $mobile1;
            $_SESSION['aadhaar1'] = $aadhaar1;
            header("Location: resultadmin.php"); // Redirect to dashboard after successful login
            exit;
        } else {
            // Redirect back to login page with error message
            $_SESSION['login_error'] = "Invalid credentials.";
            header("Location: adminlogin.php");
            exit;
        }
    } else {
        // Redirect back to login page with error message
        $_SESSION['login_error'] = "Please enter all credentials.";
        header("Location: adminlogin.php");
        exit;
    }
}
?>
