<?php 

if(isset($_POST['add']))
{
    include "../../database/CreateDb.php";

    $name           = $_POST['name'];
    $governorate_id = $_POST['governorate_id'];

    $insert_city = "INSERT INTO cities (governorate_id, name) VALUES ('$governorate_id', '$name') ";
    $conn->query($insert_city);

    header('location: ../../views/admin/cities/index.php');
}