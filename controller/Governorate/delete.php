<?php 

include "../../database/CreateDb.php";

$id = $_GET['id'];
$delete = "DELETE FROM governorates WHERE id =$id ";
$conn->query($delete);

header('location: ../../views/admin/governorates/index.php');