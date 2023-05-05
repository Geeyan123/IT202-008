<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Shop Project</td></tr>
<tr><td> <em>Student: </em> Gian Ramos (gr27)</td></tr>
<tr><td> <em>Generated: </em> 5/5/2023 6:24:59 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-3-shop-project/grade/gr27" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Orders will be able to be recorded </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Orders table with valid data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236311177-3c8bed95-734c-4d8e-b854-8b3a263d0cdb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Order Table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of OrderItems table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236312892-eff463af-4ab9-485c-a31a-aa531f3e3204.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>OrderItems table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the purchase form UI from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236320294-034aa610-1137-40d9-ab9c-0bcf86d7abae.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> purchase form UI from Heroku<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot showing the items pending purchase from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236313817-a72f997c-1166-422c-94dd-f98b58356907.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> items pending purchase from Heroku<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the Order Process validations from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236333426-7f42b914-2fb7-40cc-a25c-799666907e57.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Order Process validations from the code<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a screenshot showing the Order Process validations from the UI (Heroku)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236334398-cbf27d08-67af-4814-a723-d1a59334838d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Price difference Message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236334627-4d940529-a7e2-4dfe-9131-fb9e76d3c078.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Stock<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly describe the code flow/process of the purchase process</td></tr>
<tr><td> <em>Response:</em> <p>Order submit code that handles form submission for an order. It checks for<br>errors in the form data, validates the address, payment method, and the amount<br>received. If there are no errors, it will execute the code inside the<br>if (!$hasError) block, which is currently commented out.<div><br></div><div>Here&#39;s a breakdown of the code:</div><div><br></div><div>The<br>if (isset($_POST[&quot;submit_order&quot;])) checks whether the form has been submitted.</div><div>The $total_price, $address, $payment_method, and<br>$money_received variables are assigned values from the submitted form data using the se<br>function.</div><div>The validate_street_address function is called to validate the address. If it returns true,<br>an error message is flashed and $hasError is set to true.</div><div>The str_contains function<br>is used to check if the payment method is valid. If it is<br>not one of the valid options (cash, visa, mastercard, amex), an error message<br>is flashed and $hasError is set to true.</div><div>The amount received is compared to<br>the total price. If the amount received is less than the total price,<br>an error message is flashed and $hasError is set to true.</div><div>If there are<br>no errors, the code inside the if (!$hasError) block will be executed. However,<br>in the provided code snippet, this block is commented out and nothing will<br>happen.</div><div>It&#39;s worth noting that the code is incomplete as it seems like there<br>are some missing lines of code and comments that were removed.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/36">https://github.com/Geeyan123/IT202-008/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://gcr27-prod.herokuapp.com//Project/payment.php">https://gcr27-prod.herokuapp.com//Project/payment.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Order Confirmation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot showing the order details from the purchase form and the related items that were purchased with a thank you message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236353811-9f7a8020-2887-4940-94f4-5d7b593f6d96.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Order Confirmation Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how this information is retrieved and displayed from a code logic perspective</td></tr>
<tr><td> <em>Response:</em> <div><br></div><div>Order_detail.php fetch order details and order items associated with the specified order ID,<br>calculates the total cost of the order, and displays a success message to<br>the user. Here is a summary of what each part of the code<br>does:</div><div><br></div><div><ul><li>The Main.php layout file is required at the top of the page.</li><li>The code<br>checks if the user is logged in and outputs the session variables if<br>they are.</li><li>The $id variable is set to the id parameter passed in the<br>URL.</li><li>The database connection is established and a prepared statement is executed to retrieve<br>the order details for the specified ID.</li><li>Another prepared statement is executed to retrieve<br>the order items for the specified order ID, joining with the Products table<br>to get the product name.</li><li>The order items are fetched from the database and<br>stored in the $orderItems variable.</li><li>A foreach loop is used to iterate over the<br>order items and calculate the total cost of the order.</li><li>A success message is<br>flashed to the user to indicate that the order was successful.</li></ul></div><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/38">https://github.com/Geeyan123/IT202-008/pull/38</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://gcr27-prod.herokuapp.com/Project/order_detail.php?id=9">https://gcr27-prod.herokuapp.com/Project/order_detail.php?id=9</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to see their Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history for a user</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236358596-1d7e105e-0c17-4284-b745-87f97d4d44bd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> Purchase History Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236358596-1d7e105e-0c17-4284-b745-87f97d4d44bd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Full detail of purchase order<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details</td></tr>
<tr><td> <em>Response:</em> <div>Order_history.php file show a&nbsp; page which displaying the order history of the currently<br>logged-in user.</div><div><br></div><div>The code first includes a PHP file that contains the main layout<br>of the page. Then, it checks if the user is logged in and<br>logs the session data if they are.</div><div><br></div><div>After that, it connects to the database<br>and retrieves all orders placed by the current user using a prepared SQL<br>statement. The results are stored in the $orders variable.</div><div><br></div><div>Next, the code iterates over<br>each order and retrieves the order items using another prepared SQL statement. The<br>query retrieves the product name, unit price, and quantity for each item in<br>the order, along with the order ID. The order items are stored in<br>the $orderItems variable.</div><div><br></div><div>For each order, the code calculates the total cost of the<br>items in that order by iterating over each item and multiplying the unit<br>price by the quantity.</div><div><br></div><div>Finally, the code generates HTML for displaying the order details,<br>including the number of items in the order, the shipping address, and a<br>list of the items in the order. The order items are displayed as<br>a series of Bootstrap cards, with the product name, unit price, and quantity<br>displayed for each item, along with a total cost for that item. The<br>total cost of all items in the order is also displayed.</div><div><br></div><div>The HTML page<br>is styled using Bootstrap classes and includes a header and a container for<br>displaying the order details.</div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/40">https://github.com/Geeyan123/IT202-008/pull/40</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://gcr27-prod.herokuapp.com/Project/order_history.php">https://gcr27-prod.herokuapp.com/Project/order_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history from multiple users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236360326-d8e7af5d-7d5f-4e83-96dd-db4fb503afc0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>purchase history from multiple users<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236360326-d8e7af5d-7d5f-4e83-96dd-db4fb503afc0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Detail of purchase order<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details (mostly how it differs from the user's purchase history feature)</td></tr>
<tr><td> <em>Response:</em> <div><br></div><div>The code retrieves all orders from the "Orders" table if the user is<br>not an "Owner" by calling $stmt = $db-&gt;prepare("select * FROM Orders"); and $stmt-&gt;execute();.</div><div><br></div><div>If<br>the user is an "Owner", it retrieves orders for that specific user by<br>calling $stmt = $db-&gt;prepare("select * FROM Orders where user_id=?"); and $stmt-&gt;execute([get_user_id()]);. Here, get_user_id()<br>is assumed to be a function that returns the ID of the current<br>user.</div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/41">https://github.com/Geeyan123/IT202-008/pull/41</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://gcr27-prod.herokuapp.com/Project/order_history.php">https://gcr27-prod.herokuapp.com/Project/order_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart page showing the button to place an order</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236360748-8eb1e442-2d5e-4cca-9003-d91b1aeb64e3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> Cart page showing the button to place an order<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/236360811-e1bba491-7763-43fa-b5a0-20ca03c2523a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Closed issue<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-3-shop-project/grade/gr27" target="_blank">Grading</a></td></tr></table>