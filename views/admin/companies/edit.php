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
    <h3 class="card-title">Edit Company</h3>

    
  </div>
  <div class="card-body">
      
  <form method="post" action="../../../controller/Company/update.php" enctype="multipart/form-data">
  <?php 
  include "../../../database/CreateDb.php";
    $id = $_GET['id'];
    $edit_company = "SELECT * FROM companies WHERE id=$id";
    $results = $conn->query($edit_company);
    foreach($results as $result){
  ?>

<div class="form-group">
  <input type="hidden" name="id" value="<?php echo $result['id']; ?>">	
  <label>Company name</label>
  <input class="form-control" type="text" name="name" value="<?php echo $result['name']; ?>">
</div>
  
<div class="form-group">
  <label for="category">Category name</label>
  <select name="category_id" >
    <option value="">
      <?php 
     include "../../../database/CreateDb.php";
     $id= $result['category_id'];
     $select_cats       = "SELECT * FROM categories WHERE id= $id";
     $result_category = $conn->query($select_cats);
     $category_name = mysqli_fetch_array($result_category);
     echo $category_name['name'];             
      ?>
    </option>
      <?php 
      include "../../../database/CreateDb.php";
      $select_cats       = "SELECT * FROM categories";
      $result_categories = $conn->query($select_cats);
      while($category = mysqli_fetch_array($result_categories)){
        $category_id  = $category['id'];
        $category_name= $category['name'];
        echo "<option value='".$category_id."'>".$category_name."</option>";
      }                
			?> 
  </select>
</div>
<div class="form-group">	
  <label>Company phone</label>
  <input class="form-control" type="text" name="phone" value="<?php echo $result['phone'] ?>">
</div>

<div class="form-group">
  <label for="governorate">Company Governorate</label>
  <select name="governorate_id">
    <option value="">
    <?php 
     include "../../../database/CreateDb.php";
     $id= $result['governorate_id'];
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
  <label for="city">Company City</label>
  <select name="city_id">
    <option value="">Select City</option>
    <?php
      include "../../../database/CreateDb.php";
      $select_cities = "SELECT * FROM cities";
      $result_cities = $conn->query($select_cities);
      while($city=mysqli_fetch_array($result_cities)){
      $city_id  = $city['id'];
      $city_name= $city['name'];
      echo "<option value='".$city_id."'>".$city_name."</option>";              
      }
    ?>
  </select> 
</div>
<div class="form-group">
  <label>Company Image</label>
  <input class="form-control" type="file" name="image">
</div>
  
<input type="submit" name="edit" value="edit" class="btn btn-success">


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
    