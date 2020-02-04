
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
			<li class="active">Governorates</li>
			</ol>
</div><!--/.row-->
<a class="btn btn-primary" href="create.php">Add Governorate</a>
<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<th>Governorate name</th>
		<th>control</th>
	</tr>
</thead>
<tbody>

<?php 
		include "../../../database/CreateDb.php";
        $select_governorates="SELECT * FROM governorates";
        $governorates=$conn->query($select_governorates);
        foreach ($governorates as   $governorate) {?>
        	<tr>
        		<td><?php echo $governorate['name'];?> </td>        		
                <td>
                    <a class="btn btn-primary" href="edit.php?id=<?php echo $governorate['id'];?>">edit</a>
                    <a class="btn btn-danger"  href="../../../controller/Governorate/delete.php?id=<?php echo $governorate['id'];?>">delete</a>
                </td>
                </tr>

        	
       <?php } ?>
		
	</tbody>
</table> 
