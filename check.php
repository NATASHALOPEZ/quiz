<?php
session_start();
?>
<?php

   $con = mysqli_connect('localhost','root');
 
   	mysqli_select_db($con,'quiz_database');
   ?>


<?php 

if (!isset($_SESSION['score'])){
  $_SESSION['score'] = 0;
}
?>

<?php
if(isset($_POST['answer'])){
  $selected_ans = $_POST['answer'];
}
else{
  $selected_ans = NULL;
}

if($selected_ans = NULL){
  echo  "please select";
  exit();
}
?>
<?php

if(isset($_POST['submit'])){

  $number = $_POST['q_number'];
  $selected_ans = $_POST['answer'];
  $nextNumber = $number+1;

  $quer = "SELECT * FROM `questions_fun`";
   $result = mysqli_query($con, $quer); 
   $total = $result->num_rows;

  $query = "SELECT * FROM `answers_fun`
  WHERE q_number= $number AND correct=1";

   $results = mysqli_query($con, $query); 
   $row = $results->fetch_assoc();
   $correct_ans = $row['aid'];

   if($correct_ans==$selected_ans){
     $_SESSION['score']++;
   }

   $percent = ($number/$total) * 100;
   echo "$number is $percent% of $total";
 

if($number == $total){
header('location:final.php');
exit();
}else{
  header('location:fun.php?n='.$nextNumber);
}
 
}

?>
