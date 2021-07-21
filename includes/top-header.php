<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled"style =font-size:15px;>

<?php if(strlen($_SESSION['login']))
    {   ?>
				<li><a href="#"><i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>

					
					<li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li>
<?php }
else{ ?>

	<li><a href="procare/dashboard.php"><i class="icon fa fa-user"></i>My Account (Portal) </a></li>
				<li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
                                <li class="dropdown dropdown-small">
						<a href="track-orders.php" class="dropdown-toggle" ><span class="key"><i class="icon fa fa-location-arrow"></i>Track Order</b></a>
						
					</li>
                                
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->

<div class="cnt-block">
				<ul class="list-unstyled list-inline">
                					<li class="dropdown dropdown-small">
                						<a href="procare" class="dropdown-toggle" ><span class="key">Portals</b></a>

                					</li>


                				</ul>
				
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->