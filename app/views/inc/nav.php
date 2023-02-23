<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="<?php echo URLROOT . '/'; ?>">Container</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse offset-md-8" id="navbarsExample07">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <?php if(getUserSession()): ?>
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="<?php echo URLROOT . 'admin/home'; ?>">Admin</a>
          </li>
          <?php endif; ?>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Link</a>
          </li>
          
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">
            <?php if(getUserSession() != false) : ?>  
               <?php echo getUserSession()->name; ?>
            <?php else : ?>
              Member
            <?php endif;?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdown07">
              <?php if(getUserSession() != false) : ?>
              <li><a class="dropdown-item" href="<?php echo URLROOT . 'user/logout'; ?>">Logout</a></li>
              <?php else: ?>
              <li><a class="dropdown-item" href="<?php echo URLROOT . 'user/login'; ?>">Login</a></li>
              <li><a class="dropdown-item" href="<?php echo URLROOT . 'user/register'; ?>">Register</a></li>
              <?php endif ; ?>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white">Disabled</a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown07">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      
      </div>
    </div>
  </nav>