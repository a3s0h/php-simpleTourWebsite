<?php
// Enable error reporting to catch any errors
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Connect to the database
$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "Connection successful!";
} else {
    echo "No connection: " . mysqli_connect_error();
    exit(); // Exit if the connection fails to prevent further errors
}

// Select the database
mysqli_select_db($con, 'pr1');

// Access form data
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

// Insert form data into the database
$query = "INSERT INTO userInfoData (user, email, mobile, comment) VALUES ('$user', '$email', '$mobile', '$comments')";

// Execute the query and check for errors
if (mysqli_query($con, $query)) {
    echo "Data inserted successfully!";
} else {
    echo "Data insertion failed: " . mysqli_error($con);
}

// Redirect to the index page after insertion
// note : after Location dont give any space else u'll encounter error syntax error hahah!
header('Location: index.php'); // Correct syntax for the header function
// exit(); // Ensure no further code is executed after the redirect
?>
