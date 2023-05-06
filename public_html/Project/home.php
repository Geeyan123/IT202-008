<!DOCTYPE html>
<html lang="en">




  <body>

  <?php
require(__DIR__ . "/../Layout/Main.php");
?>

<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>
    <!-- Start your project here-->
    <div class="container">
      <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <h1>Welcome to Simple Shop</h1>
      </div>
    </div>
    <!-- End your project here-->


  </body>
</html>
