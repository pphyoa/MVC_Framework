
<?php
 require_once APPROOT . "/views/inc/header.php";
 require_once APPROOT . "/views/inc/nav.php";
 ?>

   <div class="container-fluid">
    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
        <?php flash("ref"); ?>
           <div class="card p-5 bg-light">
            <h1 class="text-center text-info mb-3">Edit A Post</h1>
            <form action="" method="post" autocapitalize="off" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="post" class="form-label">Post Category</label>
                    <select class="form-select" id="post" name="cat_id">
                         <?php foreach($data['cats'] as $cat): ?>
                            <?php if($cat->id == $data['post']->cat_id): ?>
                             <option value="<?php echo $cat->id; ?>" selected><?php echo $cat->name; ?></option>
                            <?php else: ?>
                             <option value="<?php echo $cat->id; ?>" ><?php echo $cat->name; ?></option>
                            <?php endif; ?>
                         <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control <?php echo !empty($data['title_err']) ? 'is-invalid' : ''; ?>" id="title" value="<?php echo $data['post']->title; ?>" >
                    <div  class="invalid-feedback"><?php echo !empty($data['title_err']) ? $data['title_err'] : ''; ?></div>
                </div>
                <div class="form-group">
                    <label for="desc" class="form-label ">Post Description</label>
                    <textarea class="form-control <?php echo !empty($data['desc_err']) ? 'is-invalid' : ''; ?>" name="desc" id="desc" rows="3"><?php echo $data['post']->description; ?></textarea>
                    <div  class="invalid-feedback"><?php echo !empty($data['desc_err']) ? $data['desc_err'] : ''; ?></div>
                </div>
                <div class="mb-3">
                       <label for="file">File Input</label>
                       <input type="file" class="form-control <?php echo !empty($data['file_err']) ? 'is-invalid' : ''; ?>" id="file" name="file" >   
                       <div  class="invalid-feedback"><?php echo !empty($data['file_err']) ? $data['file_err'] : ''; ?></div>                    
                       <input type="hidden" name="old_file" value="<?php echo $data['post']->image; ?>">
                </div>
                 <div class="form-group">
                    <label for="cont" class="form-label">Post Content</label>
                    <textarea class="form-control  <?php echo !empty($data['content_err']) ? 'is-invalid' : ''; ?>" name="content" id="cont" rows="3"><?php echo $data['post']->content; ?></textarea>
                    <div  class="invalid-feedback"><?php echo !empty($data['content_err']) ? $data['content_err'] : ''; ?></div>
                </div><br>
                   
                     <div style="float:right">
                        <input type="submit" name="submit" class="btn btn-outline-secondary" value="Cancle">
                        <input type="submit" name="submit" class="btn btn-primary" value="Edit">
                     </div>
                
            </form>
           </div>
        </div>
    </div>
   </div>


<?php require_once APPROOT . "/views/inc/footer.php";?>

