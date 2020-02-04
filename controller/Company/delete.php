<?php 

include "../../database/CreateDb.php";

$id = $_GET['id'];
$delete = "DELETE FROM companies WHERE id= $id";
$conn->query($delete);

header('location: ../../views/admin/companies/index.php');