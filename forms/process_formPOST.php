<!DOCTYPE html>
<html>
<body>

<?php
// Check if the form was submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // Collect the data from the input fields using the 'name' attributes
    		$name = htmlspecialchars($_POST['user_name']);
    		$email = htmlspecialchars($_POST['user_email']);

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


<h2>All POST Data</h2>
<?php print_r($_POST); ?>
<br><br>
<h3>Display POST Array Elements</h3>
<?php print_r($_POST['user_name']); ?>
<br><br>
<h2>REQUEST</h2>
<?php print_r($_REQUEST); ?>

<!--
<h2>View All SuperGlobals</h2>
<?php //print_r($GLOBALS); ?>
<h2>All SERVER Data</h2>
<?php //print_r($_SERVER); ?>
-->

</body>
</html>
