<?php

if(isset($_POST['add']))
{
    include "../../database/CreateDb.php";

    $name = $_POST['name'];

    $insert_category = "INSERT INTO categories(name) VALUES ('$name')";
    $conn->query($insert_category);

    header('location: ../../views/admin/categories/index.php');
}