<!DOCTYPE html>
<html lang="en">
    <body>

        <?php
        require(__DIR__ . "/../Layout/Main.php");
        ?>

        <?php
            $sort = isset($_GET['sort']) ? $_GET['sort'] : 'id';
            $sql = "select * FROM Products where visibility = 1";
            $orderby = isset($_GET['order']) ? $_GET['order'] : 'desc';

            if ($sort == 'rating') {
              $sql .= " ORDER BY avg_rating $orderby";
            } else {
              $sql .= " ORDER BY id $orderby";
            }

            $db = getDB();
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <!-- Start your project here-->
        <div class="container">
            <form method="GET" action="">

                <div>
                    <label for="sort">Sort by:</label>
                    <select name="sort" id="sort">
                        <option value="id">id</option>
                        <option value="avg_rating">Avg Rating</option>
                    </select>
                </div>
                <button type="submit">Apply filters</button>
            </form>
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
                        <div class="card-footer text-muted">Average Rating <?php echo $product['avg_rating'] ?></div>
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