

<!doctype html>
<html lang="en">
  <head>
      
         <style>
body {
  background-image: url("color.jpg");
}

div {
  background-color: aliceblue;
}


</style>
      
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
    <title>Hello, world!</title>
  </head>
  <body>
     
<A HREF="control.php">Management</A> 
      <A HREF="search.php">Search</A> 
<p class="lead">
      
      </p>
 <div class="card mb-8" style="max-width: 1800px;">
     
  <div class="row no-gutters">
    
    <div class="col-md-8">
        <?php
        require("objects.inc");
        $f = new MyClass;
echo $f->customize_print();
    ?>
        
      <div  class="card-body">
          
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "samsung_tv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT *  FROM tv";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h5>TV Type: " . $row["tv_type"]. "<br />TV Details:" . $row["tv_details"]. "<br />TV Price: " . $row["tv_price"] . "</h5>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
          
          
      </div>
    </div>
  </div>
</div>
   
    
      </body>
</html>