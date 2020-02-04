<?php 

include "../../database/CreateDb.php";

$id = $_GET['id'];
$delete = "DELETE FROM cities WHERE id =$id ";
$conn->query($delete);

header('location: ../../views/admin/cities/index.php');