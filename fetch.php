<?php
//fetch.php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost","omar", "hilavila", "samsung_tv");
 $query = "SELECT * FROM tv WHERE tv_type = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["n"] = $row["tv_type"];
  $data["a"] = $row["tv_details"];
  $data["g"] = $row["tv_price"];
 
 }

 echo json_encode($data);
}
?>
