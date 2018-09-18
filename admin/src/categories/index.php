<?php require_once __DIR__ . '/admin/bootstrap.php'; ?>

<?php echo ADMIN_PATH; exit; ?>

<?php require_once ADMIN_PATH . '/partials/_header.php'; ?>
<?php require_once ADMIN_PATH . '/partials/_navbar.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php require_once ADMIN_PATH . '/partials/_sidebar.php'; ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Categories</h1>
            
            <a href="add_category.php" class="btn btn-info">Add New Category</a> <br>
            <br>
            <table class="table table-responsive table-striped">
            	<tr>
            		<th>Sr.No</th>
            		<th>Category Name</th>
            		<th>No of Products</th>
            		<th>Actions</th>
            	</tr>

            	<tr>
            		<td>1</td>
            		<td>Product 1</td>
            		<td>2</td>
            		<td>
            			<a href="edit_category.php?id=1" class="btn btn-warning">Edit</a>
            			<a href="delete_category.php?id=1" class="btn btn-danger">Delete</a>
            		</td>
            	</tr>
            </table>
            
            
        </div>
    </div>
</div>

<?php require_once ADMIN_PATH . '/partials/_footer.php'; ?>