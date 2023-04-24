<!DOCTYPE html>
<html lang="en">
    <body>

        <?php
        require(__DIR__ . "/../Layout/Main.php");
        ?>

        <?php
            $db = getDB();
            $stmt = $db->prepare("select * FROM Products where visibility = 1");
            $stmt->execute();
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <!-- Start your project here-->
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row">
                <?php
                    foreach($products as $product) {
                ?>
                <div class="col-md-4" style="margin-bottom: 30px">
                    <div class="card text-center">
                        <div class="card-header"><?php echo $product['category'] ?></div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?php echo get_url('detail_product.php?id='.$product['id'])?>"><?php echo $product['name'] ?></a></h5>
                                <p class="card-text"><?php echo $product['description'] ?></p>
                               
                            </div>
                        <div class="card-footer text-muted">Unit Price <?php echo $product['unit_price'] ?>$</div>
                        <div class="card-footer text-muted">Remaing Stock <?php echo $product['stock'] ?></div>
                            <?php if(is_logged_in()) { ?>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <?php } ?>

                            <?php if(has_role('Admin')) { ?>
                            <a href="<?php echo get_url('admin/product_edit.php?id='.$product['id'])?>" class="btn btn-primary">Edit</a>
                            <?php } ?>
                    </div>
                </div>
                
                <?php
                    }
                    ?>
            </div>
        </div>
    
    
    </body>
</html>