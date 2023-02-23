<?php
 require_once APPROOT . "/views/inc/header.php";
 require_once APPROOT . "/views/inc/nav.php";
 ?>
<div class="container mt-5">
   <div class="col-md-8 offset-md-2">
    <?php flash("ref_succ"); ?>
     <div class="card p-3">
        <div class="card-header">
            <?php echo $data['post']->title; ?>
            <span style="float:right">
                <a href="<?php echo URLROOT . 'post/home/' . $data['post']->cat_id; ?>" class="btn btn-info">Back</a>
                <a href="<?php echo URLROOT . 'post/edit/' . $data['post']->id; ?>" class="btn btn-primary">Edit</a>
            </span>
        </div>
        <div class="card-body p-2">
            <img src="<?php echo URLROOT . 'assets/uploads/' . $data['post']->image; ?>" alt="" style="width:100%;">
            <p><?php echo $data['post']->content; ?></p>
        </div>
     </div>
   </div>
</div>

<?php require_once APPROOT . "/views/inc/footer.php";?>