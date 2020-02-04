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
    <h3 class="card-title">Add Company</h3>

    
  </div>
  <div class="card-body">
      
  <form method="post" action="../../../controller/Company/create.php" enctype="multipart/form-data">

<div class="form-group">	
  <label>Company name</label>
  <input class="form-control" type="text" name="name">
</div>
  
<div class="form-group">
  <label for="category">Category name</label>
  <select name="category_id" >
		<option>Select Category</option>
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
  <input class="form-control" type="text" name="phone">
</div>

<div class="form-group">
  <label for="governorate">Company Governorate</label>
  <select name="governorate_id" id="governorate">
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

<div class="form-group">
  <label for="city">Company City</label>
  <select name="city_id" id="city">
    <option value="">Select city</option>
  <?php
            
      include "../../../database/CreateDb.php";
      $select_cities = "SELECT * FROM cities";
      $result_cities = $conn->query($select_cities);
      $count= mysqli_num_rows($result_cities);       
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
  
<input type="submit" name="add"  class="btn btn-success">



</form>
  </div>
  <!-- /.card-body -->


</div>
<!-- /.card -->
</section>
<!-- /.content -->

<?php
    include "../design/footer.php";
    