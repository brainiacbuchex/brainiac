<?php
if (isset($_POST['surname']))&&if (isset($_POST['firstname']))&&if (isset($_POST['regno']))&&if (isset($_POST['department']))&&if (isset($_POST['level']))&&if (isset($_POST['genotype']))&&if (isset($_POST['bloodgroup'])){
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $regno = $_POST['regno'];
    $department = $_POST['department'];
    $level = $_POST['level'];
    $genotype = $_POST['genotype'];
    $bloodgroup = $_POST['bloodgroup'];
    if(!empty($surname)&&!empty($firstname)&&!empty($regno)&&!empty($department)&&!empty($level)&&!empty($genotype)&&!empty($bloodgroup) {
        echo 'Ok';
    }   else {
        echo 'Fill in the details';
    }
}
?>
