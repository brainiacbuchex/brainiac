<?php
$con = mysqli_connect('localhost','root','','student');
if($con){
    echo "Connected!";
}else{
    echo "Error!";
}
?>
    