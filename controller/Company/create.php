<?php 

if(isset($_POST['add']))
{
    include "../../database/CreateDb.php";
    
    $name           =$_POST['name'];
    $category_id    =$_POST['category_id'];
    $phone          =$_POST['phone'];
    $governorate_id =$_POST['governorate_id'];
    $city_id        =$_POST['city_id'];
    $image          = $_FILES['image']['name'];
    $image_tmp      = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp, "../../public/uploads/$image");

    $insert_company = "INSERT INTO companies (name, category_id, phone, governorate_id, city_id, image)
     VALUES ('$name','$category_id','$phone','$governorate_id','$city_id','$image')";
    $conn->query($insert_company);

    header('location: ../../views/admin/companies/index.php');
}