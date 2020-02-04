<?php 

if(isset($_POST['edit']))
{
    include "../../database/CreateDb.php";
    
    $id             =$_POST['id'];
    $name           =$_POST['name'];
    $email          =$_POST['email'];
    $password       =md5($_POST['password']);
    $image          = $_FILES['image']['name'];
    $image_tmp      = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp, "../../public/uploads/$image");

    $update_admin = "UPDATE admin SET name='$name',email='$email',password='$password',image='$image' 
    WHERE id=$id " ; 
    $conn->query($update_admin);

    header('location: ../../views/admin/administrators/index.php');
}