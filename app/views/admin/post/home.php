<?php
 require_once APPROOT . "/views/inc/header.php";
 require_once APPROOT . "/views/inc/nav.php";
 ?>
<div class="container mt-5">
    <div class="row">
    <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h2>Post</h2>
                </div>
                <div class="card-block">
                    <ul class="list-group">
                    <?php foreach($data['cats'] as $cat): ?>
                        <li class="list-group-item">
                        <a href="<?php echo URLROOT . 'post/home/' . $cat->id; ?>" class="text-center"><?php echo $cat->name; ?></a>                          
                        </li> 
                    <?php endforeach; ?> 
                    <li class="list-group-item bg-primary">
                        <a href="<?php echo URLROOT . 'post/create/'; ?>" class="text-white">Create</a>
                    </li>                 
                    </ul>
                </div>
            </div>

        </div>      
        <div class="col-md-7 offset-md-1">
            <?php foreach($data['posts'] as $post): ?>
              <div class="card mb-3">
                <div class="card-header bg-dark text-white">
                    <?php echo $post->title; ?>
                    <span style="float:right">
                        <a href="<?php echo URLROOT . 'post/show/' . $post->id; ?>" class="btn btn-info btn-sm" style="width:60px;">Edit</a>
                        <a class="btn btn-danger btn-sm" style="width:60px;">Delete</a>
                    </span>
                </div>
                <div class="card-block bg-light"><?php echo "<br>".$post->description; ?></div>
              </div>
            <?php endforeach; ?>
        </div>
</div>
</div>

<?php require_once APPROOT . "/views/inc/footer.php";?>