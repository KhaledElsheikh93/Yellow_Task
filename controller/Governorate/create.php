<?php

if(isset($_POST['add']))
{
    include "../../database/CreateDb.php";

    $name = $_POST['name'];
    $insert_governorate = "INSERT INTO governorates (name) VALUES ('$name') ";
    $conn->query($insert_governorate);

    header('location: ../../views/admin/governorates/index.php');
}