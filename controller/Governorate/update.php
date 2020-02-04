<?php 

if(isset($_POST['edit']))
{
    include "../../database/CreateDb.php";

    $id   = $_POST['id'];
    $name = $_POST['name'];

    $update_governorate = "UPDATE governorates SET name='$name' WHERE id='$id' ";
    $conn->query($update_governorate);

    header('location: ../../views/admin/governorates/index.php');
}