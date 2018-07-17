<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$selected_val = $_POST['quiz'];

	$_SESSION['username'] = $name;

if (empty($name) || empty($selected_val)){
	header("Location: ../quiz_project/quiz_session.php?signup=empty");
	exit();
}
else
if(!empty($name) && $selected_val == 'fun')
    {
         header('location:fun.php?n=1');
    }
    else
    {
         header('location:less_fun.php?q=1');
    }


?>