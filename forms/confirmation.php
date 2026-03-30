<!DOCTYPE html>
<html>
<body>

<?php
// Check if the cookies are set and display a welcome message
if (isset($_COOKIE['user_name_cookie']) && isset($_COOKIE['color_cookie'])) {
    $name = htmlspecialchars($_COOKIE['user_name_cookie']);
    $color = htmlspecialchars($_COOKIE['color_cookie']);
    echo "<h1>Hello $name!</h1>";
    echo "<p>Your favorite color (from cookie) is: $color</p>";
} else {
    echo "<p>Cookies are not set. Please go back to the [form page](form.html) and submit your information.</p>";
}
?>

<br><br>
<h3>REQUEST ARRAY</h3>
<?php print_r($_REQUEST); 
$_COOKIE['user_name_cookie'];?>


</body>
</html>
