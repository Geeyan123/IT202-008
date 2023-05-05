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
$stmt = $db->prepare("select * FROM Cart AS c, Products AS p WHERE user_id=? AND c.product_id=p.id");
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

            <h1>Checkout</h1>

              <div >
     <form class="mt-4" method="post">
            <input type="hidden" name="submit_order"/>
                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <!-- <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Card details</h5>
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                        class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                    </div> -->


                     <div class="form-group">

                                <div class="form-outline form-white mb-4">
                                            <input required type="text" id="payment_method" class="form-control form-control-lg" siez="17"
                                              placeholder="Enter Payment method" name="payment_method" />
                                            <label class="form-label" for="payment_method">Payment Method</label>
                                          </div>

                                             <div class="form-outline form-white mb-4">
                                                                  <input required type="text" id="money_received" class="form-control form-control-lg" siez="17"
                                                                    placeholder="Enter Amount" name="money_received" />
                                                                  <label class="form-label" for="money_received">Amount</label>
                                                                </div>

                                                 <div class="form-outline form-white mb-4">
                                                                  <input required type="text" id="address" class="form-control form-control-lg" siez="17"
                                                                    placeholder="Enter Address" name="address" />
                                                                  <label class="form-label" for="address">Address</label>
                                                                </div>

                      </div>






                   
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
              <br>
              <button type="submit" class="btn btn-primary">Submit Order</button>
          </div>
            </form>
          </div>

        </div>

      </div>


  </div>

  </div>

    </section>
    </div>



<?php
require(__DIR__ . "/../../partials/flash.php");


?>
    </div>
    <!-- End your project here-->

  </body>
</html>

<?php
    function validate_street_address($string) {
        $check_pattern = '/\d+ [0-9a-zA-Z ]+/';
        $has_error = !preg_match($check_pattern, $string);
        // Returns boolean:
        // 0 = False/ No error
        // 1 = True/ Has error
        return $has_error;
    }

    //UCID GR27

    if (isset($_POST["submit_order"])) {
        $total_price = $sum;
        $address = se($_POST, "address", "", false);
        $payment_method = se($_POST, "payment_method", "", false);
        $money_received = se($_POST, "money_received", "", false);
        $user_id = get_user_id();

        //UCID GR27
        $hasError = false;
        if (validate_street_address($address)) {
            flash("Enter Valid Address", "warning");
            $hasError = true;
        }

        if (!str_contains("cash,visa,mastercard,amex",strtolower($payment_method))) {
            flash("Please select only Cash, Visa, MasterCard, Amex", "warning");
            $hasError = true;
        }

        if ($money_received < $total_price) {
            flash("Payment should be equal to or greater than order total Total is {$total_price} and money received {$money_received}", "warning");
            $hasError = true;
        }

        if (!$hasError) {
            //flash("Welcome, $email");
            //TODO 4
            $db = getDB();

             $stmt = $db->prepare("INSERT INTO Orders (user_id, total_price, address, payment_method, money_received) VALUES(:user_id, :total_price, :address, :payment_method, :money_received)");
             try {
                $stmt->execute([":user_id" => $user_id, ":address" => $address, ":payment_method" => $payment_method, ":total_price" => $total_price, ":money_received" => $money_received]);
                $order_id = $db->lastInsertId();

                foreach($orders as $order) {
                    $stmt = $db->prepare("INSERT INTO OrderItems (order_id, product_id, quantity, unit_price) VALUES(:order_id, :product_id, :quantity, :unit_price)");
                    $stmt->execute([":order_id" => $order_id, ":quantity" => $order['desired_quantity'], ":unit_price" => $order['unit_price'], ":product_id" => $order['product_id']]);
                }

                $sql = "DELETE FROM Cart WHERE user_id=?";
                $stmt= $db->prepare($sql);
                $stmt->execute([$user_id]);

                flash("Order Successful! Thank you for your purchase", "success");
                $url = get_url('order_detail.php?id='.$order_id);
                die(header("Location: {$url}"));
             } catch (Exception $e) {
                flash("<pre>" . var_export($e, true) . "</pre>");
            }
        }
    }
 ob_end_flush();
?>