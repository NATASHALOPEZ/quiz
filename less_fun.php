<?php

session_start();
?>
<?php
//connection to database
if(!isset($_SESSION['username'])){
header('location:quiz_session.php');
}

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'quiz_database');

?>
<?php 
//get the question number
$q_number = (int) $_GET['q'];
 $quer = "SELECT * FROM `questions_lessfun`";
   $result = mysqli_query($con, $quer); 
   $total = $result->num_rows;
   $percent = ($q_number/$total) * 100;
   

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
   <link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	
	
</head>
<style type="text/css">
  .container{
    margin-top: 10%;
  }
   #progressbar {
      background-color: black;
      border-radius: 13px; 
      padding: 3px;
      margin-top: 20px;
      margin-bottom: 20px;
    }
    
    #progressbar > div {
       background-color: green;
       width: <?php echo $percent ?>%; 
       height: 20px;
       border-radius: 10px;
    }
</style>
<body>
	
<div class="container">
	
	<h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2> <br>

<div class="col-lg-12 m-auto d-block">
	<div class="card" >
		<h3 class="text-center card-header"> Hi <?php echo $_SESSION['username']; ?>, you must select  1 out of 4 options. Best of Luck :)  </h3>
	 </div>
  <div id="progressbar">
      <div></div>
    </div>
   <!--  <div id="myHtml" style="display: none;">Please select an option </div> -->
	 <form id="chkclick" action="check2.php" method="post">
	 <?php
   //query to get questions from database
	 $q = " select * from questions_lessfun where qid = $q_number";
	 $query = mysqli_query($con, $q);

	  $question = $query->fetch_assoc();
	   $q1 = " select * from answers_lessfun where q_number = $q_number";
     //query to get answers from database
	 $answers = mysqli_query($con, $q1);

	 
	 	?>
	 	
	 	<div class="card">
	 		<h4 class="card-header"> <?php echo $question['question']  ?>  </h4>


				 	<div class="card-body">
				 
				 		<ul>
				 			<?php while($row = $answers->fetch_assoc()): ?>
                             <li> <input type="radio" name="answer" id="options" value="<?php echo $row['aid']; ?>"  ><?php echo $row['answer']?></li>
				 			<?php endwhile; ?>

				           </ul>
				 	</div>
				 </div>



     <input type="hidden" name="q_number" value="<?php echo $q_number; ?>">
	 <input type="submit" name="submit" id="submitButton" value="Next" class="btn btn-success btn-lg">


</form>

</div>
</div>

	<div class="logout">
	<a href="logout.php" class="btn btn-primary btn-lg "> LOGOUT </a>
	</div>


<!-- <script type='text/javascript'>
    $(document).ready(function(){
     $('#submitButton').click(function(e){
     	e.preventDefault();
     	if($("options").is(':checked')){
     	 $('form#chkclick').submit();
     	}
     	else{
     		var hiddenBox = $( "#myHtml" );
     		hiddenBox.show();
     	}
     })
    })
</script> -->
</body>
</html>