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

$db = getDB();
//if (!has_role("Owner")) {
//$stmt = $db->prepare("select * FROM Orders");
//$stmt->execute();
//} else {
//$stmt = $db->prepare("select * FROM Orders where user_id=?");
//$stmt->execute([get_user_id()]);
//}

// Set default filter/sort options
$filter = isset($_GET['filter']) ? $_GET['filter'] : '';
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'date_purchased';
$orderby = isset($_GET['order']) ? $_GET['order'] : 'desc';
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 1; // Limit results per page

// Get user's ID
$user_id = $_SESSION['user']['id'];

// Build SQL query with filter/sort options
$sql = "SELECT * FROM Orders WHERE user_id = :user_id";
$params = [':user_id' => $user_id];

if (!empty($filter)) {
  $sql .= " AND category = :category";
  $params[':category'] = $filter;
}

if (!empty($_GET['start_date'])) {
  $sql .= " AND date_purchased >= :start_date";
  $params[':start_date'] = $_GET['start_date'];
}

if (!empty($_GET['end_date'])) {
  $sql .= " AND date_purchased <= :end_date";
  $params[':end_date'] = $_GET['end_date'];
}

//if ($sort == 'total') {
//  $sql .= " ORDER BY total $order";
//} else {
//  $sql .= " ORDER BY date_purchased $order";
//}

// Calculate pagination
$offset = ($page - 1) * $limit;
$total_pages = 1;

// Execute query with limit and offset
$stmt = $db->prepare($sql. " LIMIT {$limit} OFFSET {$offset}");

$stmt->execute($params);

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get total number of pages
$stmt = $db->prepare($sql);
$stmt->execute($params);
$total_results = $stmt->rowCount();
$total_pages = ceil($total_results / $limit);

$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// $stmt->execute([$o['id']]);


?>
    <!-- Start your project here-->
    <div class="container">
    <section class="h-100 h-custom" style="background-color: #eee;">
    <h1>Order History Page</h1>


  <div class="container py-5 h-100">
    <form method="GET" action="order_history.php">
      <div>
        <label for="filter">Filter by category:</label>
        <select name="filter" id="filter">
          <option value="">All categories</option>
          <option value="category1">Category 1</option>
          <option value="category2">Category 2</option>
          <option value="category3">Category 3</option>
        </select>
      </div>
      <div>
        <label for="start_date">Start date:</label>
        <input type="date" name="start_date" id="start_date">
      </div>
      <div>
        <label for="end_date">End date:</label>
        <input type="date" name="end_date" id="end_date">
      </div>
      <div>
        <label for="sort">Sort by:</label>
        <select name="sort" id="sort">
          <option value="date_purchased">Date purchased</option>
          <option value="total">Total price</option>
        </select>
      </div>
      <div>
        <label for="order">Order:</label>
        <select name="order" id="order">
          <option value="asc">Ascending</option>
          <option value="desc">Descending</option>
        </select>
      </div>
      <button type="submit">Apply filters</button>
    </form>

    <?php foreach($results as $o) {

                 $stmt = $db->prepare("SELECT OrderItems.*, Products.name
                                       FROM OrderItems
                                       INNER JOIN Products ON OrderItems.product_id = Products.id
                                       WHERE OrderItems.order_id = ?");
                                           $stmt->execute([$o['id']]);

                          $orderItems = $stmt->fetchAll(PDO::FETCH_ASSOC);


                          $sum = 0;
                          foreach($orderItems as $item) {
                              $sum = $sum + $item['quantity'] * $item['unit_price'];
                          }

                          ?>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">

        <div class="card">
          <div class="card-body p-4">





            <div class="row">
              <div class="col-lg-12">
                <hr>
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Order Detail</p>
                    <p class="mb-0">This Order have <?php echo count($orderItems) ?> items in your cart</p>
                    <p class="mb-0">Address: <?php echo $o['address'] ?></p>
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

              </div>



            </div>

          </div>

        </div>
      </div>
             <?php } ?>

    <?php
    // Output pagination links
    echo "<p>";
    if ($page > 1) {
      echo "<a href='?page=" . ($page - 1) . "&filter=$filter&sort=$sort&order=$orderby'>Previous</a> ";
    }

    for ($i = 1; $i <= $total_pages; $i++) {
      echo "<a href='?page=$i&filter=$filter&sort=$sort&order=$orderby'>$i</a> ";
    }

    if ($page < $total_pages) {
      echo "<a href='?page=" . ($page + 1) . "&filter=$filter&sort=$sort&order=$orderby'>Next</a>";
    }
    echo "</p>";
    ?>
    </div>
  </div>
</section>
    </div>
    <!-- End your project here-->


  </body>
</html>



