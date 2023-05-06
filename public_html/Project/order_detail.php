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

$id = $_GET['id'];
$db = getDB();
$stmt = $db->prepare("select * FROM Orders where id=? LIMIT 1");
$stmt->execute([$id]);
$order = $stmt->fetch();

$stmt = $db->prepare("SELECT OrderItems.*, Products.name
                      FROM OrderItems
                      INNER JOIN Products ON OrderItems.product_id = Products.id
                      WHERE OrderItems.order_id = ?");
$stmt->execute([$order['id']]);
$orderItems = $stmt->fetchAll(PDO::FETCH_ASSOC);


$sum = 0;
foreach($orderItems as $item) {
    $sum = $sum + $item['quantity'] * $item['unit_price'];
}
?>
    <!-- Start your project here-->
    <div class="container">
    <section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">
            <h1>Order Confirmation Page</h1>
            <div class="row">
              <div class="col-lg-7">
                <hr>
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Order Detail</p>
                    <p class="mb-0">This Order have <?php echo count($orderItems) ?> items in your cart</p>
                    <p class="mb-0">Address: <?php echo $order['address'] ?></p>
                  </div>
                 
                </div>

                <?php foreach($orderItems as $order) { ?>

                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5><?php echo $order['name'] ?></h5>
                          <p class="small mb-0">Unit Price <?php echo $order['unit_price'] ?></p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0"><?php echo $order['quantity'] ?></h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">$<?php echo $order['quantity'] * $order['unit_price'] ?></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>

              </div>
              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">

                    <hr class="my-4">

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Subtotal</p>
                      <p class="mb-2"><?php echo $sum ?></p>
                    </div>



                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total(Incl. taxes)</p>
                      <p class="mb-2"><?php echo $sum ?></p>
                    </div>

            
                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
    <!-- End your project here-->


  </body>
</html>



