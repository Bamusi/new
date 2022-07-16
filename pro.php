<?php

$dbh=mysqli_connect('abul.db.elephantsql.com','root','LydlQc7tBOs6qCZPm-qxbLgbUu9CaeQN','demrnydp');

if(isset($_POST['username'])){
   $uname=$_POST['username'];
   $password=$_POST['password'];
   
   $sql="SELECT * FROM `login` WHERE `username`='".$uname."' AND `password`='".$password."' 
   limit 1";
   
   $result=mysqli_query($dbh,$sql);
   
   if(mysqli_num_rows($result)==1){
	   echo "<script type='text/javascript'> document.location = 'main.php'; </script>";
	   
	   exit();
   }
   else{
	   echo "<script>alert('Invalid Details');</script>";
	   exit();
	   }
}

?>