<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Gian Ramos (gr27)</td></tr>
<tr><td> <em>Generated: </em> 4/14/2023 6:39:39 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/gr27" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232156020-c4ba1917-ec48-4fb3-9afb-371ed0543554.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid email<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232156117-3407f79a-3730-4cdb-8187-d8d4e79cdea1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232156205-c8655afa-8139-4f26-b0e6-8433dea1155e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password dont match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232156301-c1b6e783-f90c-4a74-8bd7-8f118a2660f6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email not available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232156375-5a4cc51f-62da-4076-be2b-240acaa47896.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username not available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232156633-2041a9fe-ac0f-4a35-a6bf-4fc0351ab0fb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>data filled in<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232156485-0f055872-8b78-4a8e-90c5-4fa4ac78044d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>successful registration<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232156679-2bf1aa3b-c80d-4975-bf85-eccfc1e69e1a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>dev<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232157688-6ab1b8ec-99a5-472e-b1ce-5275ddb3d140.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>table with data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/2">https://github.com/Geeyan123/IT202-008/pull/2</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <div>We are referring to the form document object model - we have input<br>fields for email and password etc.</div><div><br></div><div>We use client side and server side validation<br>with PHP and Javascript</div><div><br></div><div>Password is handled by validations to ensure that they contain<br>the right number of characters / right characters and that they match. We<br>used password_hash() to generate the password</div><div><br></div><div>The DB is utilized to store data so<br>that duplicates will not be able to register</div><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232158722-2bad0d48-e989-4b57-8d9e-8e9456ff9949.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User is registered in database<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232158809-ee18f4ae-4ab6-4165-9f32-b37b425d7856.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User password is wrong<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232158915-e992d71d-936e-4f73-85d4-3b0e7d4830c5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>validation for non existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232159116-cdee276b-a668-4514-8346-fd8eec613c2f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>dev  and successful login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/3">https://github.com/Geeyan123/IT202-008/pull/3</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>We created a navigation file in our partials folder that creates a link<br>for login. It will pull in our functions.php and that will pull in<br>our DB so we have access to our forms.<div><br></div><div>The validation is the same<br>as register where we use PHP and JS to validate email/user and password</div><div><br></div><div>The<br>password is handled also the same as we are validating if the password<br>contains enough characters/matching. We used password_verify() in which it takes raw password and<br>a hash. It extracts the salt from the has and uses it to<br>hash the raw password then it compare the new hash to the existing<br>has and returns true or false</div><div><br></div><div>The DB is utilized to make sure there<br>are no duplicates</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232160048-042d225b-1256-4efb-aa27-c1e67c22973d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>logged out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232160139-380ee135-9743-4872-a30c-9c3e442b5a43.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>has to be logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/3">https://github.com/Geeyan123/IT202-008/pull/3</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>A navigations file is created to make a link for login and logout.<br>It will pull our functions.php and DB so that we have access to<br>those.&nbsp; This navigation bar allows us to move between register and login.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232160139-380ee135-9743-4872-a30c-9c3e442b5a43.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>not logged in - dev<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232161161-3e23202c-3f45-4f4e-90bd-63bad872274a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>role restricted and dev<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232161383-6c1c81e8-a496-4393-9d25-16afb7343490.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User Roles table with admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232161310-98adfbe3-97ac-480d-bfea-e6f0b9aab1b0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User role with admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/18">https://github.com/Geeyan123/IT202-008/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Our navigation allows us to move between login and logout. This also ensure<br>that if our page is refreshed and navigated away, the session is gone.<br>Therefore if the session is destroyed, we cannot go into login protected pages.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>We created an authentication system for what permissions users have - to do<br>this we created a User Roles system where we can provide roles. For<br>now, we created an admit role.&nbsp;<div>Our roles table defines what roles are available<br>and our user roles table will be an association table. Based on what<br>roles the users have, it can determine what they can access. In this<br>case, we have an admin that can create, list and assign roles to<br>other users. Only the admin has access to this page.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232162576-8f1bf6bb-53cd-423d-97d2-99204919add8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Styled and dev <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/8">https://github.com/Geeyan123/IT202-008/pull/8</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I edited the nav&nbsp; by adding display and padding as well as text<br>spacing. The example given to us was hot pink so I decided to<br>change the coloring as well.&nbsp; I also added borders and changed margins. For<br>the body, I changed font and colors.<div><br></div><div>CSS border allow to specify style, with<br>and color of an elements border. Margins are used to create space around<br>my elements and outside of any defined borders while padding is used to<br>create space around an element&#39;s content, inside of any defined borders.&nbsp;</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232163298-9f67d0e9-3f89-46dc-a5d0-b3e1e5bc989f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232163356-83166942-d57f-44b1-b4c8-b7f3d015996e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232163434-2ab317b3-9126-4020-8815-3650a3b4ff9c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error 3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/8">https://github.com/Geeyan123/IT202-008/pull/8</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>To make messages user-friendly, we were using client-side validation so that the user<br>knows exactly why they are unable to do what they are trying to<br>do. If a user tries to do something that is being validated, our<br>validation will provide pop up messages as to why it cannot be done.<br>We handled PDO&#39;s Errorinfo so we can provide proper use friendly messages.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232163732-dd4e4845-9c87-421d-a012-3e2d5324d78b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/6">https://github.com/Geeyan123/IT202-008/pull/6</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>For our profile.php we protect the page from logged out users, present a<br>form for username, email and password, prefill username and email from session, validate<br>submitted data to see if anything needs to be updated, then it verifies<br>the updates and refreshes the session data.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232164150-b8d9d5ab-4b69-4d23-8b39-02005dd0f46e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232164231-06be944c-1836-4be8-9294-dd778e522cc3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232164286-704a4b1e-ef57-44b5-a2f1-f9d0c588a4b9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232164345-4d72364f-c688-4092-9df0-5a54e3b1aa81.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password don&#39;t match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232164403-698f5380-3a26-482b-ae4a-0f98d5df15ff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email in use<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232164726-e2fc1629-aa63-48c0-97ef-2550781829b2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before - <a href="mailto:&#x75;&#115;&#101;&#x72;&#x32;&#x40;&#116;&#x65;&#115;&#116;&#x2e;&#99;&#x6f;&#x6d;">&#x75;&#115;&#101;&#x72;&#x32;&#x40;&#116;&#x65;&#115;&#116;&#x2e;&#99;&#x6f;&#x6d;</a> username is user2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232164901-de918607-e487-4c21-92bd-20170bb7ca7c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after - <a href="mailto:&#117;&#115;&#101;&#x72;&#50;&#x40;&#116;&#101;&#x73;&#116;&#x2e;&#99;&#111;&#109;">&#117;&#115;&#101;&#x72;&#50;&#x40;&#116;&#101;&#x73;&#116;&#x2e;&#99;&#111;&#109;</a> username is now imchanged<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Geeyan123/IT202-008/pull/6">https://github.com/Geeyan123/IT202-008/pull/6</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>The logic behind editing profile allows logged in users to navigate to their<br>profile page. From here they are able to make changes. When a user<br>tries to make changes,&nbsp; the proposed changes will be ran through our validation<br>to ensure that the changes can be made. If it passes validation, the<br>changes will be updated and the session data will be refreshed. If the<br>validation fails, the user will see user friendly messages to let them know<br>why the changes cannot be made.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232165651-628f39fb-94a9-44c1-b99e-c56495041384.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232165811-8ba03c37-ee3a-4fdf-80b7-b27847e19767.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project board part 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124085965/232165969-53d700e2-d145-41cd-a047-76d946f5ce61.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project board part 2<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/Geeyan123/projects/4/views/1">https://github.com/users/Geeyan123/projects/4/views/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://gcr27-prod.herokuapp.com/Project/login.php">https://gcr27-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/gr27" target="_blank">Grading</a></td></tr></table>