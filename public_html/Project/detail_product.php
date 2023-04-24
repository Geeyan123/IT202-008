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