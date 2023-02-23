
<?php
 require_once APPROOT . "/views/inc/header.php";
 require_once APPROOT . "/views/inc/nav.php";
 ?>

<div class="container-fluid mt-5">
    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
        <div class="card p-5 bg-light">
            <?php flash('register_success') ?>
            <?php flash('login_fail') ?>
            <h1 class="text-center text-info mb-3">Login To Post</h1>
            <form action="" method="post" autocapitalize="off">
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control <?php echo !empty($data['email_err']) ? 'is-invalid' : ''; ?>" id="email" placeholder="Email" >
                    <div  class="invalid-feedback"><?php echo !empty($data['email_err']) ? $data['email_err'] : ''; ?></div>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control <?php echo !empty($data['password_err']) ? 'is-invalid' : ''; ?>" id="password" placeholder="Password" >
                    <div  class="invalid-feedback"><?php echo !empty($data['password_err']) ? $data['password_err'] : ''; ?></div>
                </div>
               
                <div class="row justify-content-between">
                     <a href="<?php echo URLROOT.'user/register'; ?>">Not a user yet,Please Register!</a>
                     <div>
                        <input type="submit" name="submit" class="btn btn-outline-secondary" value="Cancle">
                        <input type="submit" name="submit" class="btn btn-primary" value="Login">
                     </div>
                </div>
            </form>
           </div>
        </div>
    </div>
   </div>


<?php require_once APPROOT . "/views/inc/footer.php";?>

