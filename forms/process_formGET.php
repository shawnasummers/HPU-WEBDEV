<!DOCTYPE html>
<html>
<body>

<?php
// Check if the form was submitted using the GET method
if ($_SERVER["REQUEST_METHOD"] == "GET") {
     // Collect the data from the input fields using the 'name' attributes
    		$name = htmlspecialchars($_GET['user_name']);
    		$email = htmlspecialchars($_GET['user_email']);

    		if (!empty($name) && !empty($email)) {
        		echo "<h2>Submitted Information:</h2>";
        		echo "Name: " . $name . "<br>";
        		echo "Email: " . $email;
        		// Here you can add code to save the data to a database or send an email
    		} else {
        		echo "One or more fields are empty.";
    		}
} else {
    		echo "Form was not submitted correctly.";
}
?>

<h2>All GET Data</h2>
<?php print_r($_GET); ?>
<br><br>

<h2>View All SuperGlobals</h2>
<?php print_r($GLOBALS); ?>
<br><br>
<h2>All SERVER Data</h2>
<?php print_r($_SERVER); ?>


</body>
</html>
