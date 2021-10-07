<?php
	include('dbConfig.php');
	if(isset($_POST['add'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];		
		mysqli_query($cn,"insert into s1 (name , folio) values ('$firstname', '$lastname')");
	}
?>