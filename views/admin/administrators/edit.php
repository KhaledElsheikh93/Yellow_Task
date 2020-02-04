<?php 
	include "../design/main.php";
	include "../design/nav.php";
	include "../design/sidebar.php";
    include "../design/header.php";
?>
<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Edit Admin</h3>

    
  </div>
  <div class="card-body">

  <form method="post" action="../../../controller/Admin/update.php" enctype="multipart/form-data">
  <?php 
    include "../../../database/CreateDb.php"; 
    $id = $_GET['id'];
    $select_admin = "SELECT * FROM admin WHERE id= $id ";
    $admins = $conn->query($select_admin);
    foreach($admins as $admin){
  ?>
<div class="form-group">	
  <input type="hidden" name="id" value="<?php echo $admin['id']; ?>">
  <label>Admin name</label>
  <input class="form-control" type="text" name="name" value="<?php echo $admin['name']; ?>">
</div>

<div class="form-group">	
  <label>Admin email</label>
  <input class="form-control" type="text" name="email" value="<?php echo $admin['email'] ?>">
</div>

<div class="form-group">	
  <label>Admin password</label>
  <input class="form-control" type="password" name="password">
</div>
  
<div class="form-group">
  <label>Admin Image</label>
  <img style="height: 70px;width: 100px" src="../../../public/uploads/<?php echo $admin['image']; ?>">
  <input class="form-control" type="file" name="image">
</div>
  
<input type="submit" name="edit" class="btn btn-success">
    <?php }?>
</form>
  </div>
  <!-- /.card-body -->


</div>
<!-- /.card -->
</section>
<!-- /.content -->

<?php
    include "../design/footer.php";
    