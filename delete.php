<?php
include 'config/database.php';


if(isset($_GET['id'])){

    $id = $_GET['id'];
    $delete = $db->getdelete($id);
}
header("Location:insert.php");

?>