
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
			<li class="active">Cities</li>
			</ol>
</div><!--/.row-->
<a class="btn btn-primary" href="create.php">Add City</a>
<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<th>City name</th>
        <th>Governorate name</th>
		<th>control</th>
	</tr>
</thead>
<tbody>

<?php 
		include "../../../database/CreateDb.php";
        $select_cities="SELECT * FROM cities";
        $cities=$conn->query($select_cities);
        foreach ($cities as   $city) {?>
        	<tr>
        		<td><?php echo $city['name'];?> </td>
				<td>
				<?php
				   $governorate_id = $city['governorate_id']; 
				   $select_governorates = "SELECT * FROM governorates WHERE id= $governorate_id";
				   $governorates= $conn->query($select_governorates);
				   $governorate = $governorates->fetch_assoc();
				   echo $governorate['name'];
				?> 
				</td>       		
                <td>
                    <a class="btn btn-primary" href="edit.php?id=<?php echo $city['id'];?>">edit</a>
                    <a class="btn btn-danger"  href="../../../controller/City/delete.php?id=<?php echo $city['id'];?>">delete</a>
                </td>
                </tr>

        	
       <?php } ?>
		
	</tbody>
</table> 
<?php include "../design/footer.php"; ?>
