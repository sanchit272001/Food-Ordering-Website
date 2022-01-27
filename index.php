
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"order_management");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$name = $_POST["email"];
$password = $_POST["password"];
//$sql = "INSERT INTO login_details  (user_id, password, role)
//VALUES ('$name', '$password', 'student')";

//if ($conn->query($sql) === TRUE) {
//  echo "\nNew record created successfully";
//} else {
//  echo "Error: " . $sql . "<br>" . $conn->error;
//}
$sql = "SELECT * FROM login_details where user_id ='$name' and password ='$password'";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
  echo mysqli_num_rows($result);
  
  }
 else {
  echo "0 results";
}
$conn->close();
?>
