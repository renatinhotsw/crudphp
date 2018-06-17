<?php
	if (isset($_POST['nome']) === true && empty($_POST['nome']) == false){
	
	$con = mysqli_connect("127.0.0.1", "root", "", "ajaxdb");

	$sql = "SELECT * from names";
		
	$rs = mysqli_query($con,$sql);

	

	if($rs != ''){
		echo "consulta nao retornou dados";
	}else{
			/* fetch object array */
	    while ($row = $result->fetch_row()) {
	        printf ("%s (%s)\n", $row[0], $row[1]);
	    }

	    /* free result set */
	    $result->close();

	}
	
	




	}

	mysqli_close($con);
?>