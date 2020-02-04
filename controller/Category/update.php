<?php 

if(isset($_POST['edit']))
{
    include "../../database/CreateDb.php";

    $id   = $_POST['id'];
    $name = $_POST['name'];

    $update_category = "UPDATE categories SET name='$name' WHERE id=$id ";
    $conn->query($update_category);

    header('location: ../../views/admin/categories/index.php');
}