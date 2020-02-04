
<?php 
	include "../design/main.php";
	include "../design/nav.php";
	include "../design/sidebar.php";
    include "../design/header.php";
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Companies</li>
			</ol>
</div><!--/.row-->
<a class="btn btn-primary" href="create.php">Add Company</a>
<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<th>Company name</th>
		<th>Category</th>
		<th>Phone</th>
		<th>Governorate</th>
		<th>City</th>
		<th>Image</th>
		<th>control</th>
	</tr>
</thead>
<tbody>

<?php 
		include "../../../database/CreateDb.php";
        $select_companies="SELECT * FROM companies";
        $companies=$conn->query($select_companies);
        foreach ($companies as   $company) {?>
        	<tr>
        		<td><?php echo $company['name'];?> </td>
                <td>
        		<?php
				   $category_id = $company['category_id']; 
				   $select_categories = "SELECT * FROM categories WHERE id= $category_id";
				   $categories= $conn->query($select_categories);
				   $category = $categories->fetch_assoc();
				   echo $category['name'];

                ?>
        		</td>
        		<td><?php echo $company['phone'];?> </td>
        		<td>
				<?php
				   $governorate_id = $company['governorate_id']; 
				   $select_governorates = "SELECT * FROM governorates WHERE id= $governorate_id";
				   $governorates= $conn->query($select_governorates);
				   $governorate = $governorates->fetch_assoc();
				   echo $governorate['name'];

                ?>
                </td>
        		<td>
        		<?php
					$city_id  = $company['city_id'];
					$select_cities = "SELECT * FROM cities WHERE id= $city_id";
					$cities = $conn->query($select_cities);
					$city = $cities->fetch_assoc();
					echo $city['name'];

                ?>
                </td>
        		<td> <img style="width:100px;height: 100px" src="../../../public/uploads/<?php echo $company['image'];?>"></td>
        		
        	 <td>
        	 	<a class="btn btn-primary" href="edit.php?id=<?php echo $company['id'];?>">edit</a>
        	 	<a class="btn btn-danger"  href="../../../controller/Company/delete.php?id=<?php echo $company['id'];?>">delete</a>
        	 </td>
        	</tr>

        	
       <?php } ?>
		
	</tbody>
</table> 
<?php include "../design/footer.php"; ?>
