<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project QUIZ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="main.css">
  
</head>
<style type="text/css">

</style>
<body >
<div class="container " >
   <?php
     $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
     if (strpos($url, "signup=empty")){
         echo "<p class='error'>Please fill in all fields!</p>";
     } 
      ?>
 

     <h2 class="text-center ">Quiz Session Form</h2>
     <br>
     <form action="validation.php" method="post">
      <div class="row">
      <div  class="form-group col-sm-6">
        <label>User Name</label>
        <input type="text" name="user" class="form-control">
      </div>
     
      <div  class="form-group col-sm-6">
      <label  for="quiz">Select QUIZ</label>
      <div class=" col-lg-12 col-sm-6">
        <select id="quiz" name="quiz" class="form-control">
          <option>fun</option>
          <option>less fun</option>
        </select> 
      </div>
  
      </div>
      <button type="submit" class="btn btn-primary btn-lg buttonStart " >Start</button>
    </div>
      
     </form>
   


</div>

</body>
</html>
