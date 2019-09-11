<?php
$con = mysqli_connect('localhost','root','','Contact');
if($con){
    echo"Connected!";
}else{
    echo"Error!";
}
?>
    