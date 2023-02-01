<?php 
include 'config/database.php';


if(isset($_POST['updatesubmit'])){

    $id = $_POST['user_id'];
    $name = $_POST['firstname'];
    $Mname = $_POST['middlename'];
    $lastname = $_POST['lastname']; 
    $birth = $_POST['birthdate'];
    $address = $_POST['at_address'];

    $update = $db->getUpdate($id,$name,$Mname,$lastname,$birth,$address);
   
}
header("Location:insert.php");
?>