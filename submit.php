<?php

$servername = "localhost";
$username = "kazu";
$password = "8133987k";
$dbname = "contact_form";

$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO tbl_contactinfo(`name`, `email`, `subject`, `message`) VALUES('$name', '$email', '$subject', '$message')";


if ($conn->query($sql) === TRUE) {
	header("location: index.php");
}else {
	echo "Error" . $sql . "<br>" . $conn->error;
}

$conn->close();




?>