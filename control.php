<!DOCTYPE html>
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
    <?php
        require("objects.inc");
        $f = new MyClass;
echo $f->customize_print();
    ?>
    <p class="lead">
      <h1 class="display-3">Add Samsung TV</h1>
      </p>
 <div class="card mb-8" style="max-width: 1800px;">
  <div class="row no-gutters">
    <div contenteditable="true" class="col-md-4">
        
<form method="post" action="add.php">
    <label for="inputName">TV Name:</label>
    <input type="text" name="name" id="inputName">
    
     <label for="inputName">TV Details:</label>
    <input type="text" name="name2" id="inputName">
    
     <label for="inputName">TV Price:</label>
    <input type="text" name="price" id="inputName">
    
      
    <input type="submit" value="Submit">
   </div>
        </div>
</div>
   
    
</form>

<p class="lead">
      <h1 class="display-3">Delete Samsung TV</h1>
      </p>
 <div class="card mb-8" style="max-width: 1800px;">
  <div class="row no-gutters">
    <div contenteditable="true" class="col-md-4">
        
        
          
     
 
        

        
  
    
    
<form method="post" action="delete.php">
    <label for="inputName">TV price to delete:</label>
    <input type="text" name="name" id="inputName">
    
    
   
    
    <input type="submit" value="Submit">
   </div>
        </div>
</div>
  
    
</form>
<h1 class="display-3">update Samsung TV</h1>
      </p>
 <div class="card mb-8" style="max-width: 1800px;">
  <div class="row no-gutters">
    <div contenteditable="true" class="col-md-4">
        
        
          
     
 
        

        
  
    
    
<form method="post" action="update.php">
    <label for="inputName">old TV name to update:</label>
    <input type="text" name="name" id="inputName">
    <br>
    <label for="inputName">new TV name to set:</label>
    <input type="text" name="name1" id="inputName">
    <br>
    <label for="inputName">new TV details to set:</label>
    <input type="text" name="name2" id="inputName">
    <br>
    <label for="inputName">new TV price to set:</label>
    <input type="text" name="name3" id="inputName">
   
    
    <input type="submit" value="Submit">
   </div>
        </div>
</div>
    <A HREF="retrive.php">main page</A> 
    
</form>
</body>