<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "elearning";

$con = mysqli_connect($server,$user,$password,$db);

if ($con){ 
	?>
	
	<?php

}else{
	?>
	<script>
		alert(' No connection succesfully');
	</script>
	<?php
}

?>
