<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"></meta>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
    $("button").click(function(){
       var formData =	$.post( "ajax/gravar.php", $("form").serialize() );
        console.log($("form").serialize() );

        var obj = $("form").serialize();
		var myJSON = JSON.stringify(obj);

       
		function sendData(){
			 var person = {
            	 FirstName: $("#fistname").val(),
            	 LastName:$("#lastname").val()
            
        		}

        	$.ajax({
            url: '/ajax/gravar.php',
            type: 'post',
            dataType: 'json',
            contentType: 'application/json',
            success: function (data) {
                $('#demo').html(data.msg);
            },
            data: JSON.stringify(person)
        });



		}

    });
});
</script>
</head>
<body>

<form action="">
  First name: <input type="text" name="FirstName" ><br>
  Last name: <input type="text" name="LastName" ><br>
</form>

<button onclick="sendData()">Gravar</button>

<div></div>

<span id="demo"></span>

</body>
</html>
