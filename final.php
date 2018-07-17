<?php
session_start();

   ?>
   <?php

   $con = mysqli_connect('localhost','root');
 
    mysqli_select_db($con,'quiz_database');
   ?>

<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="main.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
 
</style>

   </head>
   <body>
     <div class="container text-center" >
      <br><br>
      <h1 class="text-center text-success text-uppercase animateuse" >  The Quiz </h1>
      <br><br><br><br>
      <table class="table text-center table-bordered table-hover">
        <tr>
          <th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>
          
        </tr>
      <td>
            <?php
                         echo "Your  Score is ".$_SESSION['score'].""; ?>
            </td>
        
      </table>

        <a href="logout.php" class="btn btn-success"> LOGOUT </a>
      </div>
   </body>
</html>
