<!DOCTYPE html>
<html lang="en">
    <body>

        <?php
        require(__DIR__ . "/../Layout/Main.php");
        ?>

        <?php
            $id = $_GET['id'];
            $db = getDB();
            $stmt = $db->prepare("select * FROM Products where id=? LIMIT 1");
            $stmt->execute([$id]);
            $product = $stmt->fetch();
        ?>
        <!-- Start your project here-->

        <div class="container">

        <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
      height: 400px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h4 class="mb-3">Product Detail Page</h4>

          <h1 class="mb-3"><?php echo $product['name'] ?></h1>
          <h4 class="mb-3"><?php echo $product['category'] ?></h4>
         
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
            <br>
            <br>
            <br>
            <div class="row">

            <form method="POST">
                <input type="hidden" name="user_id" value="<?php echo get_user_id() ?>" >    
                <input type="hidden" name="product_id" value="<?php echo $product['id'] ?>" >    
                <input type="hidden" name="stock" value="<?php echo $product['stock'] ?>" >    
                <input type="hidden" name="unit_price" value="<?php echo $product['unit_price'] ?>" >    
    
               
                <div class="col-md">
                    <div class="card text-center">
                        <div class="card-header"><?php echo $product['category'] ?></div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['name'] ?></h5>
                                <p class="card-text"><?php echo $product['description'] ?></p>
                               
                            </div>
                        <div class="card-footer text-muted">Unit Price <?php echo $product['unit_price'] ?>$</div>
                        <div class="card-footer text-muted">Remaing Stock <?php echo $product['stock'] ?></div>
                            <?php if(is_logged_in()) { ?>
                            <button type="submit" class="btn btn-primary">Add to cart</a>
                            <?php } ?>

                    </div>
                </div>
            </form>
            </div>
        </div>

    </body>
</html>

<?php
    print_r($_POST);
if (isset($_POST["product_id"])) {
   
    $user_id = (int) se($_POST, "user_id", "", false);
    $product_id = (int) se($_POST, "product_id", "", false);
    $unit_price = (int) se($_POST, "unit_price", "", false);
    $desired_quantity = 1;

    $db = getDB();
    $stmt = $db->prepare("select * FROM Products where id=? LIMIT 1");
    $stmt->execute([$id]);
    $product = $stmt->fetch();

    $stock = $product['stock'];

    $hasError = false;
    if (empty($stock) || $stock <= 0) {
        print("I'm here");
        flash("This product is in out of stock", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        $db = getDB();

        $stmt = $db->prepare("select * FROM Cart where user_id=? AND product_id=? LIMIT 1");
        $stmt->execute([$user_id, $product_id]);
        $cart = $stmt->fetch();

        $cart_query = "INSERT INTO Cart (user_id, product_id, desired_quantity, unit_price) VALUES(:user_id, :product_id, :desired_quantity, :unit_price)";

        if ($cart) {
            $cart_query = "UPDATE Cart set user_id=:user_id, product_id=:product_id, desired_quantity=:desired_quantity, unit_price=:unit_price WHERE id=:cart_id";
        }


        $stmt = $db->prepare($cart_query);
        try {
            $cart_query_stmt = [":user_id" => $user_id, ":product_id" => $product_id, ":desired_quantity" => $desired_quantity,":unit_price" => $unit_price];

            if ($cart) {
                $cart_query_stmt[":desired_quantity"] = $cart['desired_quantity'] + 1;
                $cart_query_stmt[":cart_id"] = $cart['id'];
            }
            $stmt->execute($cart_query_stmt);

            $product_update_query = "UPDATE Products set stock=:stock WHERE id=:product_id";
            $stmt = $db->prepare($product_update_query);

            $stmt->execute([":stock" => $product['stock'] - 1, ":product_id" => $product['id']]);
            flash("Order added to cart!", "success");

            
        } catch (Exception $e) {
            print_r($e);
        }
    }
}     
?>