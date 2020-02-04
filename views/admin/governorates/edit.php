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
    <h3 class="card-title">Edit Governorate</h3>

    
  </div>
  <div class="card-body">
      
  <form method="post" action="../../../controller/Governorate/update.php" enctype="multipart/form-data">
    <?php 
      include "../../../database/CreateDb.php";
      $id = $_GET['id'];
      $select_governorate = "SELECT * FROM governorates WHERE id=$id";
      $governorates= $conn->query($select_governorate);
      foreach($governorates as $governorate){
    ?>
    <div class="form-group">
    <input type="hidden" name="id" value="<?php echo $governorate['id']; ?>">	
      <label>Governorate name</label>
      <input class="form-control" type="text" name="name" value="<?php echo $governorate['name']; ?>">
    </div>
          
    <input type="submit" name="edit" class="btn btn-success">
      <?php } ?>
	
</form>
  </div>
  <!-- /.card-body -->


</div>
<!-- /.card -->
</section>
<!-- /.content -->

<?php
    include "../design/footer.php";