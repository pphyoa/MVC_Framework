
<?php
 require_once APPROOT . "/views/inc/header.php";
 require_once APPROOT . "/views/inc/nav.php";
 ?>

   <div class="container-fluid">
    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
           <div class="card p-5 bg-light">
            <h1 class="text-center text-info mb-3">Register To Post</h1>
            <form action="" method="post" autocapitalize="off">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="name" class="form-control <?php echo !empty($data['name_err']) ? 'is-invalid' : ''; ?>" id="username" placeholder="Username" >
                    <div  class="invalid-feedback"><?php echo !empty($data['name_err']) ? $data['name_err'] : ''; ?></div>
                </div>
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
                <div class="form-group">
                    <label for="confirmpass" class="form-label">Confirm Password</label>
                    <input type="password" name="confirm-password" class="form-control <?php echo !empty($data['confirm-password_err']) ? 'is-invalid' : ''; ?>" id="confirmpass" placeholder="Confirm Password" >
                    <div  class="invalid-feedback"><?php echo !empty($data['confirm-password_err']) ? $data['confirm-password_err'] : ''; ?></div>
                </div>
               
                
                     <a href="<?php echo URLROOT.'user/login'; ?>">Already Register,Please Login!</a>
                     <div>
                        <input type="submit" name="submit" class="btn btn-outline-secondary" value="Cancle">
                        <input type="submit" name="submit" class="btn btn-primary" value="Register">
                     </div>
                
            </form>
           </div>
        </div>
    </div>
   </div>


<?php require_once APPROOT . "/views/inc/footer.php";?>

