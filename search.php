<?php 
//index.php
$connect = mysqli_connect("localhost", "omar", "hilavila", "samsung_tv");
$query = "SELECT * FROM tv ORDER BY tv_type ASC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Search TV</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  </style>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
      <A HREF="retrive.php">main page</A> 
   <h2 align="center">Search TV</h2>
   <h3 align="center">Search our database</h3><br />   
   <div class="row">
    <div class="col-md-4">
     <select name="tv_list" id="tv_list" class="form-control">
      <option value="">Select TV</option>
      <?php 
      while($row = mysqli_fetch_array($result))
      {
       echo '<option value="'.$row["tv_type"].'">'.$row["tv_type"].'</option>';
      }
      ?>
     </select>
    </div>
    <div class="col-md-4">
     <button type="button" name="search" id="search" class="btn btn-info">Search</button>
    </div>
   </div>
   <br />
   <div class="table-responsive" id="tv_details2" style="display:none">
   <table class="table table-bordered">
    <tr>
     <td width="10%" align="right"><b>TV Name</b></td>
     <td width="90%"><span id="tv_type"></span></td>
    </tr>
    <tr>
     <td width="10%" align="right"><b>TV details</b></td>
     <td width="90%"><span id="tv_details"></span></td>
    </tr>

    <tr>
     <td width="10%" align="right"><b>Price</b></td>
     <td width="90%"><span id="tv_price"></span></td>
    </tr>
    
   </table>
   </div>
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#search').click(function(){
  var id= $('#tv_list').val();
  if(id != '')
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{id:id},
    dataType:"JSON",
    success:function(data)
    {
     $('#tv_details2').css("display", "block");
     $('#tv_type').text(data.n);
     $('#tv_details').text(data.a);
     $('#tv_price').text(data.g);

    }
   })
  }
  else
  {
   alert("Please Select Employee");
   $('#tv_list').css("display", "none");
  }
 });
});
</script>