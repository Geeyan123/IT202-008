<!DOCTYPE html>
<html lang="en">
    <body>

        <?php
        require(__DIR__ . "/../../Layout/Main.php");
        ?>

        <?php

        if (is_logged_in(true, '../login.php') && has_role('Admin', true, '../home.php')) {
            //comment this out if you don't want to see the session variables
            error_log("Session data: " . var_export($_SESSION, true));
        }
        ?>


        <?php
            $db = getDB();
            $stmt = $db->prepare("select * FROM Products");
            $stmt->execute();
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <!-- Start your project here-->

        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"
        />
        <div class="container">
            <br>
            <br>
            <br>
            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Unit Prict</th>
                <th>Stock</th>
                <th>Visibility</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) { ?>
            <tr>
                <td><a href="<?php echo get_url('detail_product.php?id='.$product['id'])?>"><?php echo $product['name'] ?></a></td>
                <td><?php echo $product['category'] ?></td>
                <td><?php echo $product['description'] ?></td>
                <td><?php echo $product['unit_price'] ?></td>
                <td><?php echo $product['stock'] ?></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" disabled <?php echo $product['visibility'] == 1 ? 'checked' : '' ?> id="flexCheckDefault" />
                    </div>        
                </td>
        
            </tr>
            <?php } ?>
        </tbody>
    </table>
        </div>

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
    </body>
</html>