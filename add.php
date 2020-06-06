<?php
$servername = "localhost";
$database = "samsung_tv";
$username = "omar";
$password = "hilavila";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully ";
 
$sql="INSERT INTO tv (tv_type, tv_details, tv_price)
VALUES
('$_POST[name]','$_POST[name2]','$_POST[price]')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully....return back to add more field";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>