<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Gian Ramos (gr27)</td></tr>
<tr><td> <em>Generated: </em> 4/25/2023 5:27:29 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-shop-project/grade/gr27" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234117373-e4151e5c-81eb-45cb-81e8-deaaac122346.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Create Product In User Menu<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234117598-789da4b2-da47-45a9-b7a0-da3039a0c705.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Create Product P<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234117723-96405222-f354-491a-9d7f-65f04b26665a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Product Table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>create_product.php files contain html and php code.<br><br>First part is HTML form which get<br>input from user then on submit the bottom PHP&nbsp;code is used to create<br>a new product in a database after validating and sanitizing input data. The<br>code checks if the &quot;name&quot; field was submitted via a POST request, sanitizes<br>the input values using a custom function, and checks if the &quot;name&quot; value<br>is empty. If the &quot;name&quot; value is not empty, the code inserts the<br>new product into the database and displays a success message. If there is<br>an error during execution, the code prints the error message to the screen.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/24">https://github.com/Geeyan123/IT202-008/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://gcr27-prod.herokuapp.com/Project/Products/create_product.php">https://gcr27-prod.herokuapp.com/Project/Products/create_product.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234129739-1e6360e9-9153-4d87-b97f-64e5bd0f131f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> Product List - showing 10 items without filters/sorting applied<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234129914-3183d90c-197d-4f1b-a7e5-e7f59014371e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Name Filter<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234130062-7d4ccea5-bb35-49c2-af8c-9f71eb0ba7d8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Price Filter<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234130177-bd492184-d6fd-4570-87ce-316238cd4969.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Sort by name<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234130287-01f5ae1f-474f-40cd-a629-0d0b0345d419.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Price sorting<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234130430-e3fe200d-6e58-4ede-916a-0266d7cd7268.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filter/sort code image<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <div>The Filter and Sort code that adds filter functionality to a DataTable using<br>input elements in the table header. The code clones the table header row,<br>adds a "filters" class to it, and appends it to the table's header.<br>It then initializes the DataTable with options for ordering and fixed headers, and<br>runs a function when the table is initialized.</div><div><br></div><div>Within the initialization function, the code<br>uses the DataTable API to loop through each column and create an input<br>element in the corresponding table header cell. It then attaches event listeners to<br>the input elements to listen for changes in their values. When the value<br>changes, the code gets the search value, creates a regular expression pattern, and<br>uses it to search the corresponding column for matching values. It then redraws<br>the table to display the filtered data.</div><div><br></div><div>Overall, this code provides a convenient way<br>for users to filter data in a DataTable using input elements in the<br>table header.</div><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/27">https://github.com/Geeyan123/IT202-008/pull/27</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://gcr27-prod.herokuapp.com/Project/Products/list_product.php">https://gcr27-prod.herokuapp.com/Project/Products/list_product.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234131972-472b23c8-e9b5-4ea4-9fe6-7bde42f0f514.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin product list page - show non-visible Processor item<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <div>Admin/product_list.php file that displays a table of products using the DataTables library. The<br>table contains columns for the product name, category, description, unit price, stock, and<br>visibility. Each row of the table represents a product retrieved from a MySQL<br>database using a PDO connection.</div><div><br></div><div>The DataTables library is used to add search and<br>filter functionality to the table. The library is loaded using links to external<br>CSS and JavaScript files. The table is initialized with the $('#example').DataTable() function, and<br>the initComplete callback is used to add a search input to each column<br>header. The search input allows the user to filter the table based on<br>the value in that column.</div><div><br></div><div>The code also includes some PHP code that checks<br>if the user is logged in and has the 'Admin' role before displaying<br>the session data.</div><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/29">https://github.com/Geeyan123/IT202-008/pull/29</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://gcr27-prod.herokuapp.com/Project/admin/list_product.php">https://gcr27-prod.herokuapp.com/Project/admin/list_product.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234136545-79349f18-f86d-47df-bfea-fdddc6da0dbf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edit button on shop page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234137136-50303e2a-ee62-48aa-9f59-632b2225eced.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edit button on detail page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234137136-50303e2a-ee62-48aa-9f59-632b2225eced.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>edit on admin list pa<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234138773-d8d6814f-704c-4ef3-82c3-41c8744df8fe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before update of first item<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234138909-7923da54-699e-4065-b16a-f7dd185f27b1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After update of name and stock<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <div>product_edit.php is a php file with HTML embedded code that displays a form<br>to edit a product. The form is pre-filled with the details of the<br>selected product, which is obtained by executing a SQL query on a database.<br>The form allows the user to edit the product details and submit the<br>changes to the database.</div><div><br></div><div>The PHP code at the end of the file handles<br>the form submission. It retrieves the form data using the se function, which<br>is not defined in this file and is presumably defined in an included<br>file. The code then checks if the name field is not empty and<br>if so, inserts the new product details into the database. If an error<br>occurs during the database operation, it prints the error to the page.</div><div><br></div><div>Overall, this<br>file appears to be part of a larger web application that allows users<br>to manage products in a database.</div><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/31">https://github.com/Geeyan123/IT202-008/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://gcr27-prod.herokuapp.com/Project/admin/product_edit.php?id=1">https://gcr27-prod.herokuapp.com/Project/admin/product_edit.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234139671-b44838ff-1c8f-4778-871c-21dcfc911a0e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Product title is clickable<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234139767-3e9ff5bc-e86f-4072-8de7-d63acc97ccb1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Product Details Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>In the shop page on every content page title is clickable when click<br>on title it will redirect to the detail page with id in URL.<br>then get id from URL then fetch product data and show on page<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/24">https://github.com/Geeyan123/IT202-008/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://gcr27-prod.herokuapp.com/Project/detail_product.php?id=1">https://gcr27-prod.herokuapp.com/Project/detail_product.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234140097-6a9f93ca-662c-4ee2-b0d9-a18b43e00b65.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>success message of adding to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234140097-6a9f93ca-662c-4ee2-b0d9-a18b43e00b65.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message of adding to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234140294-c859d554-0b88-4bd3-9273-50c6da9d278d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cart table with data in it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>1 cart per user<div><br></div><div>When user click add to cart button on any number<br>save product_id and user_id with desired quantity with 1.</div><div>When user click again same<br>product then update previous entry plus 1 desired quantity</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <div>The Cart code is handling the addition of a product to a user's<br>cart. Here's a breakdown of the steps:</div><div><br></div><div>1. The code prepares a SQL statement<br>that selects a row from the `Cart` table where the `user_id` and `product_id`<br>match the values passed in as parameters. The `LIMIT 1` clause is used<br>to ensure that only one row is returned.</div><div>2. The SQL statement is executed,<br>and the result is fetched into the `$cart` variable.</div><div>3. A new SQL statement<br>is prepared to insert a row into the `Cart` table with the user<br>ID, product ID, desired quantity, and unit price values passed in as parameters.</div><div>4.<br>If a row was found in step 2 (i.e., if `$cart` is not<br>null), the SQL statement in step 3 is updated to instead update the<br>existing row in the `Cart` table with the new desired quantity and unit<br>price values.</div><div>5. The `$cart_query_stmt` array is populated with the parameter values for the<br>SQL statement prepared in step 3 or 4, depending on whether a row<br>was found in step 2.</div><div>6. The SQL statement is executed with the parameter<br>values in `$cart_query_stmt`.</div><div>7. Another SQL statement is prepared to update the `stock` column<br>of the `Products` table, reducing it by one for the product ID passed<br>in as a parameter.</div><div>8. The SQL statement is executed with the parameter values<br>for the product stock and ID.</div><div>9. A success message is flashed to the<br>user.</div><div><br></div><div>If an exception is thrown during any of these steps, it will be<br>caught and printed to the screen.</div><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/24">https://github.com/Geeyan123/IT202-008/pull/24</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234141615-3d9c96c6-f868-4fe8-bf00-62d228a2d341.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> the Cart View<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <div>The Cart code is handling the addition of a product to a user's<br>cart. Here's a breakdown of the steps:</div><div><br></div><div>1. The code prepares a SQL statement<br>that selects a row from the `Cart` table where the `user_id` and `product_id`<br>match the values passed in as parameters. The `LIMIT 1` clause is used<br>to ensure that only one row is returned.</div><div>2. The SQL statement is executed,<br>and the result is fetched into the `$cart` variable.</div><div>3. A new SQL statement<br>is prepared to insert a row into the `Cart` table with the user<br>ID, product ID, desired quantity, and unit price values passed in as parameters.</div><div>4.<br>If a row was found in step 2 (i.e., if `$cart` is not<br>null), the SQL statement in step 3 is updated to instead update the<br>existing row in the `Cart` table with the new desired quantity and unit<br>price values.</div><div>5. The `$cart_query_stmt` array is populated with the parameter values for the<br>SQL statement prepared in step 3 or 4, depending on whether a row<br>was found in step 2.</div><div>6. The SQL statement is executed with the parameter<br>values in `$cart_query_stmt`.</div><div>7. Another SQL statement is prepared to update the `stock` column<br>of the `Products` table, reducing it by one for the product ID passed<br>in as a parameter.</div><div>8. The SQL statement is executed with the parameter values<br>for the product stock and ID.</div><div>9. A success message is flashed to the<br>user.</div><div><br></div><div>If an exception is thrown during any of these steps, it will be<br>caught and printed to the screen.</div><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/24">https://github.com/Geeyan123/IT202-008/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://gcr27-prod.herokuapp.com/Project/cart.php">https://gcr27-prod.herokuapp.com/Project/cart.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234141615-3d9c96c6-f868-4fe8-bf00-62d228a2d341.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before update of quantity<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234142857-45d3c18b-5839-47ff-bbea-7d9673380df4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After update of quantity<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234141615-3d9c96c6-f868-4fe8-bf00-62d228a2d341.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before update of quantity<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234143038-becddcfe-186c-4c3d-b7bd-64d24bfefe66.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After update of quantity to 0 first item<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234143200-c027bf1f-5b07-4153-a99d-745c615a6d86.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>When stock is not avaiable error message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>When add to cart button clicked first I check from product table stock<br>if stock available then added to cart if not then error message is<br>shown<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/24">https://github.com/Geeyan123/IT202-008/pull/24</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234143576-b34780a6-169b-47cd-ae7b-7f423b97c219.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before deleting item from cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234143680-6e42a629-e45e-47a4-ad4a-55c18298d44f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After deleting item from cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234143680-6e42a629-e45e-47a4-ad4a-55c18298d44f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before clearing cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234143795-4836308e-157f-4695-9b2c-1cf96dea1cd6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After clearing cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>When delete requestion received, just removed entry from the cart table<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/24">https://github.com/Geeyan123/IT202-008/pull/24</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/234144462-58974657-0185-474b-9e9a-f936e441cbbb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Github screenshot added<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-shop-project/grade/gr27" target="_blank">Grading</a></td></tr></table>