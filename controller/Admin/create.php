<?php 

if(isset($_POST['add']))
{
    include "../../database/CreateDb.php";
    
    $name     = $_POST['name'];
    $email    =$_POST['email'];
    $password =md5($_POST['password']);
    $image    = $_FILES['image']['name'];
    $image_tmp= $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp, "../../public/uploads/$image");

    $insert_admin = "INSERT INTO admin (name, email, password, image) VALUES 
    ('$name', '$email', '$password', '$image')";
    $conn->query($insert_admin);

    header('location:../../views/admin/administrators/index.php');
}