
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
			<li class="active">Admin</li>
			</ol>
</div><!--/.row-->
<a class="btn btn-primary" href="create.php">Add admin</a>
<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<th>Admin name</th>
        <th>Admin email</th>
		<th>Image</th>
		<th>control</th>
	</tr>
</thead>
<tbody>

<?php 
		include "../../../database/CreateDb.php";
        $select_admins="SELECT * FROM admin";
        $admins=$conn->query($select_admins);
        foreach ($admins as   $admin) {?>
        	<tr>
        		<td><?php echo $admin['name'];?> </td>
                <td><?php echo $admin['email'];?> </td>  
                <td> <img style="width:100px;height: 100px" src="../../../public/uploads/<?php echo $admin['image'];?>"></td>
         		
                <td>
                    <a class="btn btn-primary" href="edit.php?id=<?php echo $admin['id'];?>">edit</a>
                    <a class="btn btn-danger"  href="../../../controller/Admin/delete.php?id=<?php echo $admin['id'];?>">delete</a>
                </td>
                </tr>

        	
       <?php } ?>
		
	</tbody>
</table> 
