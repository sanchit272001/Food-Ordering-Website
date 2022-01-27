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
$email = $_POST["myemail"];
$password = $_POST["mypassword"];

$sql = "select firstname,lastname from logindetails where email ='$email' and password ='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
  ?>
  <meta HTTP-EQUIV="REFRESH" content="0.01; url=items_av.php">
  <?php
}

else {
  echo "Invalid user-id or password";
  ?>
  <meta HTTP-EQUIV="REFRESH" content="0.01; url=wrongpass.html">


<?php
}
$conn->close();
?>