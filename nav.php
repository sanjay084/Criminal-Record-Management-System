<div class="dorne-signin-btn">
							   <?php
							   if(isset($_SESSION['login']))
							   {
								   ?><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
								  <a class="nav-link" href="portal.php">Crime Registration Portal <span class="sr-only">(current)</span></a>
								  <a class="nav-link" href="status.php">Status<span class="sr-only">(current)</span></a>
								  <a class="nav-link" href="closed.php">Closed Crime<span class="sr-only">(current)</span></a>
								  <a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a>
                              
								 	<a class="nav-link" href="logout.php">Logout</a>
								   
								   <?php
							   }
								   else
								   {
									   ?>
									   <a href="ragister.php">Sign in  or Register</a>
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							   
								   <?php
								   }
							   
							   ?>
                                
                            </div>