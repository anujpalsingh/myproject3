<?php
$con = mysqli_connect('localhost','root');

if($con){
	echo "Conenction successful";
}else{
	echo"No Conenction";
}

mysqli_select_db($con, 'myuserdata');





?>