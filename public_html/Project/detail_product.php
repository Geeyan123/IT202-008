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

            <form>
                <input type="hidden" name="user_id" value="<?php echo get_user_id() ?>" >    
                <input type="hidden" name="product_id" value="<?php $product['id'] ?>" >    
                <input type="hidden" name="stock" value="<?php echo $product['stock'] ?>" >    
                <input type="hidden" name="unit_price" value="<?php echo $product['unit_price'] ?>" >    
            </form>
               
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
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <?php } ?>

                    </div>
                </div>
             
            </div>
        </div>

    </body>
</html>

<?php
if (isset($_POST["product_stock"])) {
    $stock = se($_POST, "stock", "", false);
    $user_id = (int) se($_POST, "user_id", "", false);
    $product_id = (int) se($_POST, "product_id", "", false);
    $unit_price = (int) se($_POST, "unit_price", "", false);

    $hasError = false;
    if (empty($stock) || $stock < 1) {
        flash("This product is in out of stock", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Cart (name, description, category, stock, unit_price, visibility) VALUES(:name, :description, :category, :stock, :unit_price, :visibility)");
        try {
            $stmt->execute([":name" => $name, ":description" => $description, ":category" => $category, ":stock" => $stock, ":unit_price" => $unit_price, ":visibility" => $visibility]);
            flash("Product Successfully created!", "success");
        } catch (Exception $e) {
            print_r($e);
        }
    }
}     
?>