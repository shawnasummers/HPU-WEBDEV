<?php
// Check if the form was submitted via POST
if (!empty($_POST)) {
    // Retrieve form data
    $user_name = $_POST['user_name'];
    $favorite_color = $_POST['favorite_color'];
    $expiration_time = time() + (86400 * 30); // Cookie expires in 30 days (86400 seconds = 1 day)
    $path = "/"; // Cookie available throughout the entire website

    // Set the cookies
    // Note: setcookie() must be called before any HTML output
    setcookie('user_name_cookie', $user_name, $expiration_time, $path);
    setcookie('color_cookie', $favorite_color, $expiration_time, $path);

    // Redirect the user to a confirmation or landing page (optional but recommended)
    header("Location: confirmation.php");
    exit(); // Always call exit() after a header redirect
    
}
?>
