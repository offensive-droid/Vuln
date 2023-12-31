<?php
include '..\..\db.php';

// Check if 'r' parameter is set and assign its value to $var
$email = isset($_POST['email']) ? $_POST['email'] : ''; // Assuming 'r' is the parameter containing the email
$pass = isset($_POST['password']) ? $_POST['password'] : ''; // Assuming 'r' is the parameter containing the email

$query = "SELECT * FROM users WHERE email = '$email'" . "AND " . "password = '$pass'";
$result = $mysqli->query($query);

if ($result) {
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            print_r($row); // Displaying the retrieved data
        }
    } else {
        echo "0 results";
    }
} else {
    echo "Error: " . $mysqli->error;
}
?>
