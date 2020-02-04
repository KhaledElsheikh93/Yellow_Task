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
    <h3 class="card-title">Add Admin</h3>

    
  </div>
  <div class="card-body">
      
  <form method="post" action="../../../controller/Admin/create.php" enctype="multipart/form-data">

    <div class="form-group">	
      <label>Admin name</label>
      <input class="form-control" type="text" name="name">
    </div>

    <div class="form-group">	
      <label>Admin email</label>
      <input class="form-control" type="text" name="email">
    </div>

    <div class="form-group">	
      <label>Admin password</label>
      <input class="form-control" type="password" name="password">
    </div>
      
    <div class="form-group">
      <label>Admin Image</label>
      <input class="form-control" type="file" name="image">
    </div>
      
    <input type="submit" name="add" class="btn btn-success">
	
</form>
  </div>
  <!-- /.card-body -->


</div>
<!-- /.card -->
</section>
<!-- /.content -->

<?php
    include "../design/footer.php";
    