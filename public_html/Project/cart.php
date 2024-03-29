<!DOCTYPE html>
<html lang="en">




  <body>

  <?php
  ob_start();
require(__DIR__ . "/../Layout/Main.php");
?>


<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}

$db = getDB();
$stmt = $db->prepare("select c.*, p.name as name FROM Cart AS c, Products AS p WHERE user_id=? AND c.product_id=p.id");
$stmt->execute([get_user_id()]);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
$sum = 0;
foreach($orders as $order) { 
    $sum = $sum + $order['desired_quantity'] * $order['unit_price'];
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

            <div class="row">
              <div class="col-lg-7">
                <hr>
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <p class="mb-0">You have <?php echo count($orders) ?> items in your cart</p>
                  </div>
                 
                </div>



                <?php foreach($orders as $item) { ?>

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
                              <h5><?php echo $item['name'] ?></h5>
                              <p class="small mb-0">Unit Price <?php echo $item['unit_price'] ?></p>
                            </div>
                          </div>
                          <div class="d-flex flex-row align-items-center">
                            <div style="width: 50px;">
    <!--                          <h5 class="fw-normal mb-0"></h5>-->
                              <form method="post" action="">
                                <input style="width: 35px" type="text" name="desired_quantity" value="<?php echo $item['desired_quantity']; ?>">
                                <input type="hidden" name="submit" value="<?php echo $item['id'] ?>">
                                <input type="hidden" name="order_id" value="<?php echo $item['id'] ?>">
                              </form>
                            </div>
                            <div style="width: 80px;">
                              <h5 class="mb-0">$<?php echo $item['desired_quantity'] * $item['unit_price'] ?></h5>
                            </div>

                            <a href="cart.php?delete_cart_id=<?php echo $item['id']; ?>" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
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

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Shipping</p>
                      <p class="mb-2">$20.00</p>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total(Incl. taxes)</p>
                      <p class="mb-2"><?php echo $sum + 20 ?></p>
                    </div>

            
                  </div>
                </div>

              </div>

            </div>
                <a href="payment.php" class="btn btn-primary">Place Order</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
    <!-- End your project here-->
<?php

if (isset($_GET['delete_cart_id'])) {
  $product_id = $_GET['delete_cart_id'];
  $stmt = $db->prepare("DELETE FROM Cart WHERE id = :id");
  try {
    $stmt->execute([":id" => $product_id]);
    flash("Cart item Successfully deleted!", "success");
    $url = get_url('cart.php');
    die(header("Location: {$url}"));
  } catch (Exception $e) {
    print_r($e);
  }
}

if (isset($_POST['desired_quantity'])) {
    try {
  // Get the ID of the cart item to update
  $cart_item_id = $_POST['order_id'];

// Get the new desired quantity for the cart item
  $new_desired_quantity = (int)$_POST['desired_quantity'];

// Perform the update query
  $stmt = $db->prepare("UPDATE Cart SET desired_quantity = :desired_quantity WHERE id = :id");
  print_r($stmt);
  $stmt->execute([':desired_quantity' => $new_desired_quantity, ':id' => $cart_item_id]);
        flash("Cart item successfully updated!", "success");
        $url = get_url('cart.php');
        die(header("Location: {$url}"));
          } catch (Exception $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
        }

}

ob_end_flush();
?>

  <script>
    // Get the form element
    var form = document.querySelector('form');

    // Listen for the keypress event on the form's input fields
    form.addEventListener('keypress', function(event) {
      // Check if the pressed key is the "Enter" key
      if (event.keyCode === 13) {
        // Set the value of the hidden submit field to true
        form.querySelector('input[name="submit"]').value = 'true';

        // Submit the form
        form.submit();
      }
    });
  </script>
  </body>
</html>



