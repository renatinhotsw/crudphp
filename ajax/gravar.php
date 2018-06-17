
<?php
	header('content-type: application/json; charset=utf-8');
	header("access-control-allow-origin: *");
 	
 	$teste =$_GET['person'];

 	var_dump($teste);

	$con=mysqli_connect("localhost","root","","ajaxdb");

	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';

	$sql = "INSERT into names(firstname,lastname) VALUES('$nome ','$lastname')";

	if (mysqli_query($con,$sql) ){
		echo "Dados salvos com sucesso !";
	}else{
		echo "Falha ao salvar dados!";
	}

	mysqli_close($con)
?>


