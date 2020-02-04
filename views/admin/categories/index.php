
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
			<li class="active">Categories</li>
			</ol>
</div><!--/.row-->
<a class="btn btn-primary" href="create.php">Add Category</a>
<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<th>Category name</th>
		<th>control</th>
	</tr>
</thead>
<tbody>

<?php 
		include "../../../database/CreateDb.php";
        $select_categories="SELECT * FROM categories";
        $categories=$conn->query($select_categories);
        foreach ($categories as   $category) {?>
        	<tr>
        		<td><?php echo $category['name'];?> </td>        		
                <td>
                    <a class="btn btn-primary" href="edit.php?id=<?php echo $category['id'];?>">edit</a>
                    <a class="btn btn-danger"  href="../../../controller/category/delete.php?id=<?php echo $category['id'];?>">delete</a>
                </td>
                </tr>

        	
       <?php } ?>
		
	</tbody>
</table> 
