<?php 

include "../../database/CreateDb.php";

$id = $_GET['id'];

$delete = "DELETE FROM admin WHERE id= $id ";
$conn->query($delete);

header('location: ../../views/admin/administrators/index.php');