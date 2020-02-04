<?php 

if(isset($_POST['edit']))
{
    include "../../database/CreateDb.php";
    
    $id             =$_POST['id'];
    $name           =$_POST['name'];
    $category_id    =$_POST['category_id'];
    $phone          =$_POST['phone'];
    $governorate_id =$_POST['governorate_id'];
    $city_id        =$_POST['city_id'];
    $image          = $_FILES['image']['name'];
    $image_tmp      = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp, "../../public/uploads/$image");

    $update_company = "UPDATE companies SET name='$name',category_id='$category_id',phone='$phone',
    governorate_id='$governorate_id',city_id='$city_id',image='$image' WHERE id=$id " ; 
    $conn->query($update_company);

    header('location: ../../views/admin/companies/index.php');
}