<?php

	$con=mysqli_connect("localhost","root","","ajaxdb");

	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST'lastname'];

	$sql = "INSERT into names(firstname,lastname) VALUES('$firstname ','$lastname')";

	if (mysqli_query($con,$sql) ){
		echo "salvo com sucesso !";
	}else{
		echo "falha ao salvar !";
	}

	mysqli_close($con)
?>