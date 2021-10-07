<?php
	include('dbConfig.php');
	if(isset($_POST['add'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$mess=$_POST['mess'];		
		mysqli_query($cn,"insert into contact (name , phone , email , message) values ('$name', '$phone','$email', '$mess')");
	}
?>