<?php 
$x=0;
$arrdata=array();
foreach ($_POST as $key => $value) {
	if(strpos($key, '_') !== false){
	$iparr = explode ("_", $key);
    /echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";/
	
	echo $iparr[1];
	$arrdata[$x]=$iparr[1];	
	$x=$x+1;
	}
}
$finaldata='';
for ($x=0;$x<sizeof($arrdata);$x++){
	if ($x==sizeof($arrdata) || $x==0)
	{
	$finaldata=$finaldata.$arrdata[$x];
	}
	else{
	$finaldata=$finaldata.",".$arrdata[$x];
	}
	
}
echo $finaldata;

	

//print_r($arrdata);
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

$sql = 'SELECT itemname,price FROM products WHERE id in ('.$finaldata.')';


   $result = $conn->query($sql);
   if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order_placed</title>
    <table border ="1" cellspacing ="0">
        <tr>
            <th>itemnames</th>
            <th>price</th>
        </tr>
		<?php
		while($row = $result->fetch_assoc())
			
			
			{
				echo "<tr> ";
				echo "<td>";
				echo "{$row['itemname']}";
				echo "</td>";
				echo "<td>";
				echo "{$row['price']}";
				echo "</td>";
				echo"</tr>";
				}
		?>
		
    </table>
</head>
<body>
    
</body>
</html>