<?php 

include "../../database/CreateDb.php";

$id = $_GET['id'];

$delete = "DELETE FROM categories WHERE id= $id ";
$conn->query($delete);

header('location: ../../views/admin/categories/index.php');