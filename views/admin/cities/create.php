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
    <h3 class="card-title">Add City</h3>

    
  </div>
  <div class="card-body">
      
  <form method="post" action="../../../controller/City/create.php" enctype="multipart/form-data">
    
  <div class="form-group">	
      <label>City name</label>
      <input class="form-control" type="text" name="name">
    </div>

    <div class="form-group">
          <label for="governorate">Governorate name</label>
          <select name="governorate_id">
          <option value="">Select Governorate</option>
            <?php
            include "../../../database/CreateDb.php";
              $select_governorates = "SELECT * FROM governorates";
              $result = $conn->query($select_governorates);
              while($governorate=mysqli_fetch_array($result)){
                $governorate_id  = $governorate['id'];
                $governorate_name= $governorate['name'];
                echo "<option value='".$governorate_id."'>".$governorate_name."</option>";
               
              }
            ?>
          </select> 
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
    