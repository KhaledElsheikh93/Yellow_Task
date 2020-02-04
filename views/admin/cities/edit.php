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
    <h3 class="card-title">Edit City</h3>

    
  </div>
  <div class="card-body">
      
  <form method="post" action="../../../controller/City/update.php" enctype="multipart/form-data">
    <?php 
       include "../../../database/CreateDb.php";
       $id = $_GET['id'];
       $select_city = "SELECT * FROM cities WHERE id= $id";
       $cities = $conn->query($select_city);
       foreach($cities as $city){
    ?>
    <div class="form-group">
          <label for="governorate">Governorate name</label>
          <select name="governorate_id">
          <option value="">
          <?php 
            include "../../../database/CreateDb.php";
            $id= $city['governorate_id'];
            $select_gov       = "SELECT * FROM governorates WHERE id= $id";
            $result_governorate = $conn->query($select_gov);
            $governorate_name = mysqli_fetch_array($result_governorate);
            echo $governorate_name['name'];             
          ?>
          </option>
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


    <div class="form-group">
    <input type="hidden" name="id" value="<?php echo $city['id']; ?>">	
      <label>City name</label>
      <input class="form-control" type="text" name="name" value="<?php echo $city['name']; ?>">
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