<?php 

if(isset($_POST['edit']))
{
    include "../../database/CreateDb.php";

    $id = $_POST['id'];
    $governorate_id = $_POST['governorate_id'];
    $name = $_POST['name'];

    $update_city = "UPDATE cities SET governorate_id='$governorate_id', name='$name' WHERE id=$id ";
    $conn->query($update_city);

    header('location:../../views/admin/cities/index.php');
}