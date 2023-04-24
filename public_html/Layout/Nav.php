


<!-- Navbar-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid justify-content-between">
    <!-- Left elements -->
    <div class="d-flex">
      <!-- Brand -->
      <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
        Simple Shopt
      </a>

    
    </div>
    <!-- Left elements -->

    <!-- Center elements -->
    <ul class="navbar-nav flex-row d-none d-md-flex">
     <!-- Example split primary button -->
     <div class="btn-group shadow-0 mb-2">
      <button
        class="btn btn-secondary dropdown-toggle"
        type="button"
        id="dropdownMenuButton"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
      >
        <?php echo get_username() ?>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php if (is_logged_in()) : ?>
            <li><a class="dropdown-item" href="<?php echo get_url('home.php'); ?>">Home</a></li>
            <li><a class="dropdown-item" href="<?php echo get_url('profile.php'); ?>">Profile</a></li>
        <?php endif; ?>
        <?php if (!is_logged_in()) : ?>
            <li><a class="dropdown-item" href="<?php echo get_url('login.php'); ?>">Login</a></li>
            <li><a class="dropdown-item" href="<?php echo get_url('register.php'); ?>">Register</a></li>
        <?php endif; ?>
        <?php if (has_role("Admin")) : ?>
            <li><a class="dropdown-item" href="<?php echo get_url('admin/create_role.php'); ?>">Create Role</a></li>
            <li><a class="dropdown-item" href="<?php echo get_url('admin/list_roles.php'); ?>">List Roles</a></li>
            <li><a class="dropdown-item" href="<?php echo get_url('admin/assign_roles.php'); ?>">Assign Roles</a></li>
            <li><a class="dropdown-item" href="<?php echo get_url('Products/create_product.php'); ?>">Create Product</a></li>
            <li><a class="dropdown-item" href="<?php echo get_url('Products/list_product.php'); ?>">List Product</a></li>
        <?php endif; ?>
        <?php if (is_logged_in()) : ?>
            <li><a class="dropdown-item" href="<?php echo get_url('logout.php'); ?>">Logout</a></li>
        <?php endif; ?>
      </ul>
    </div>

    </ul>
    <!-- Center elements -->
  </div>
</nav>
<!-- Navbar -->