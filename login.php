<?php
		
		$host="localhost";
		$user="root";
		$pass="";
		$dbname="school";
		$conn=new mysqli($host,$user,$pass,$dbname);
		if($conn->connect_error)
			echo 'connection failed'.$conn->connect_error;
		else{
		$username=$_POST['username'];
		$password=$_POST['passwor'];
		$query=mysqli_query($conn,"select * from login where userid='$username' and passw='$password'");
		if (mysqli_num_rows($query)<1){
			$_SESSION['msg']="Login Failed, User not found!";
			header('location: school.html');
		}
		else{
			
			header('location:school.html');
			}
		}
		
		
?>