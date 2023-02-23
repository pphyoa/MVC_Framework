<?php
 require_once APPROOT . "/views/inc/header.php";
 require_once APPROOT . "/views/inc/nav.php";
 ?>
<div class="container mt-5">
    <div class="row">
    <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h2>Category Page</h2>
                </div>
                <div class="card-block">
                    <ul class="list-group">
                    <?php foreach($data['cats'] as $cat): ?>
                        <li class="list-group-item">
                        <span><?php echo $cat->name; ?></span>                            
                        <span style="float:right">                            
                            <a href="<?php echo URLROOT . 'category/edit/' . $cat->id; ?>"><i class="fa fa-edit text-info"></i></a>
                            <a href="<?php echo URLROOT . 'category/delete/' . $cat->id; ?>"><i class="fa fa-trash text-danger"></i></a>
                        </span>
                        </li> 
                    <?php endforeach; ?>                  
                    </ul>
                </div>
            </div>

        </div>      
        <div class="col-md-7 offset-md-1">
        <div class="card p-5 bg-light">
            <?php flash("cat_create_success"); ?>
            <?php flash("cat_create_fail"); ?>
            <?php flash("cat_edit_error"); ?>
            <h1 class="text-center text-info mb-3">Edit Category</h1>
            <form action="" method="post" autocapitalize="off">
                <div class="form-group">
                    <label for="name" class="form-label">Category Name</label>
                    <?php echo $data['currentId']->name; ?>
                    <input type="text" name="name" class="form-control <?php echo !empty($data['name_err']) ? 'is-invalid' : ''; ?>" id="name" value="<?php echo $data['currentId']->name; ?>">
                    <div  class="invalid-feedback"><?php echo !empty($data['name_err']) ? $data['name_err'] : ''; ?></div>
                </div><br><br>
               
                <div class="form-group " style="float:right;">
                        <input type="submit" name="submit" class="btn btn-outline-secondary " value="Cancle">
                        <input type="submit" name="submit" class="btn btn-primary" value="Update">               
                </div>
            </form>
           </div>
        
        </div>
</div>
</div>

<?php require_once APPROOT . "/views/inc/footer.php";?>