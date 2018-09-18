<?php 
    if(isset($_POST['btn_submit'])){
        require_once ADMIN_PATH . '/db/connect.php';
    }

?>

<?php require_once ADMIN_PATH . '/partials/_header.php'; ?>
<?php require_once ADMIN_PATH . '/partials/_navbar.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php require_once ADMIN_PATH . '/partials/_sidebar.php'; ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Add New Category</h1>
            
            <form name="frm_category" method="post">
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name">
                </div>
                <div class="form-group">
                    <label for="category_image">Category Image</label>
                    <input type="file" id="category_image">
                    <p class="help-block">Upload an image for category.</p>
                </div>
                <button type="submit" class="btn btn-default" name="btn_submit">Save</button>
            </form>
            
        </div>
    </div>
</div>
<?php require_once ADMIN_PATH . '/partials/_footer.php'; ?>