<!DOCTYPE html>
<html lang="en">
    <body>

        <?php
        ob_start();
        require(__DIR__ . "/../../Layout/Main.php");
        ?>

        <?php
            $id = $_GET['id'];
            $db = getDB();
            $stmt = $db->prepare("select * FROM Products where id=? LIMIT 1");
            $stmt->execute([$id]);
            $product = $stmt->fetch();
        ?>

        <?php

        if (is_logged_in(true, '../login.php')) {
            //comment this out if you don't want to see the session variables
            error_log("Session data: " . var_export($_SESSION, true));
        }
        ?>
        <!-- Start your project here-->
        <div class="container">
            <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
       
                <form method="POST">
        <h1>Edit Product</h1>

                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                            <div class="input-group">
                                <input type="text" id="form3Example1" name="name" value="<?php echo $product['name'] ?>" placeholder="Title" class="form-control" />
                            </div>
                            </div>
                            <div class="col">
                            <div class="input-group">
                                <input type="text" id="form3Example2" name="category"  value="<?php echo $product['category'] ?>" placeholder="Category" class="form-control" />
                            </div>
                            </div>
                        </div>

                        <div class="input-group mb-4">
                            <input type="text" name="description" placeholder="Description"  value="<?php echo $product['description'] ?>" id="form3Example3" class="form-control" />
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                            <div class="input-group">
                                <input type="number" id="form3Example1" min="1" class="form-control"  value="<?php echo $product['stock'] ?>" name="stock"  placeholder="Stock"/>
                            </div>
                            </div>
                            <div class="col">
                            <div class="input-group">
                            <input type="number" id="form3Example1" min="1" class="form-control"  value="<?php echo $product['unit_price'] ?>" name="unit_price"   placeholder="Unit Price"/>
                            </div>
                            </div>
                        </div>


                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" name="visibility" value="visibility" id="form2Example33" checked />
                            <label class="form-check-label" for="form2Example33">
                            Visibility
                            </label>
                        </div>



                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>

                </form>
            </div>
        </div>
    </body>
</html>


<?php

if (isset($_POST["name"])) {
    $name = se($_POST, "name", "", false);
    $description = se($_POST, "description", "", false);
    $category = se($_POST, "category", "", false);
    $stock = se($_POST, "stock", "", false);
    $unit_price = (int) se($_POST, "unit_price", "", false);
    $visibility = true;
    $hasError = false;
    if (empty($name)) {
        flash("Product title must not be empty", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        $db = getDB();
        $stmt = $db->prepare("UPDATE Products SET name = :name, description = :description, category = :category, stock = :stock, unit_price = :unit_price, visibility = :visibility WHERE id = :id");
        try {
            $stmt->execute([":name" => $name, ":description" => $description, ":category" => $category, ":stock" => $stock, ":unit_price" => $unit_price, ":visibility" => $visibility, ":id" => $id]);
            flash("Product Successfully updated!", "success");
            $url = get_url('shop.php');
            die(header("Location: {$url}"));
        } catch (Exception $e) {
            print_r($e);
        }

    }
}
ob_end_flush();
?>
