<?php

$conn = mysqli_connect('localhost','root','','world');


if ($conn){
	echo "Done connection";

}else{
	echo "NOt";
}
?>