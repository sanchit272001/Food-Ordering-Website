<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"detailsmanagenemt");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$firstname = $_POST["myfirstname"];
$lastname = $_POST["mylastname"];
$email = $_POST["myemail"];
$dob = $_POST["mydob"];
$gender = $_POST["mygender"];
$maritalstatus = $_POST["mymaritalstatus"];
$password = $_POST["mypassword"];
$sql = "INSERT INTO logindetails  (firstname,lastname,email,dateofbirth,gender,maritalstatus,password) VALUES ('$firstname', '$lastname', '$email','$dob','$gender','$maritalstatus','$password')";
?>
<meta HTTP-EQUIV="REFRESH" content="0.01; url=aftersignup.html">
<?php
if ($conn->query($sql) === TRUE) {
echo "\nNew record created successfully";
}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
$conn->close();
?>
