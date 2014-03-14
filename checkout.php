<?php
include 'header.php'
?>
    
    <section id="main">
        <div class="container_12">
            <div id="content" class="grid_12">
                <header>
                    <h1 class="page_title">Checkout</h1>
                </header>
                    
                <article id="checkout_info" class="grid_9">
		    <ul class="checkout_list">
			<li class="active">
			    <div class="list_header"><div class="number">1</div>Checkout Method</div>
			    <div class="list_body">
				<form class="checkout_or">
				    <h3>Checkout as a Guest or Register</h3>
				    <p>Register with us for future convenience:</p>
				    <ul class="radio">
					<li><input class="niceRadio" type="radio" name="register"> Checkout as Guest</li>
					<li><input class="niceRadio" type="radio" name="register"> Register</li>
				    </ul>
				    <p>Register and save time!<br>
				    Register with us for future convenience:</p>
				    <ul>
					<li>Fast and easy check out</li>
					<li>Easy access to your order history and status</li>
				    </ul>
				    <input type="submit" value="Continue">
				</form>
				<form class="login">
				    <h3>Login</h3>
				    <p>If you have an account with us, please log in.</p>
							
				    <div class="email">
					<strong>Email Adress:</strong><sup class="surely">*</sup><br>
					<input type="email" name="" class="" value="">
				    </div><!-- .email -->
							
				    <div class="password">
					<strong>Password:</strong><sup class="surely">*</sup><br>
					<input type="text" name="" class="" value="">
				    </div><!-- .password -->
				
				    <div class="remember">
					<input class="niceCheck" type="checkbox" name="Remember_password">
					<span>Remember password</span>
				    </div><!-- .remember -->
				
				    <div class="submit">										
					<input type="submit" value="Login">
                                        <a class="forgot" href="#">Forgot Your Password?</a>
					<span>* Required Field</span>
                                        <div class="clear"></div>
				    </div><!-- .submit -->
				</form>
				<div class="clear"></div>
			    </div>
			</li>
			<li>
			    <a href="#" class="list_header"><div class="number">2</div>Billing Information</a>
			</li>
			<li>
			    <div class="list_header"><div class="number">3</div>Shipping Information</div>
			</li>
			<li>
			    <div class="list_header"><div class="number">4</div>Shipping Method</div>
			</li>
			<li>
			    <div class="list_header"><div class="number">5</div>Payment Information</div>
			</li>
			<li>
			    <div class="list_header"><div class="number">6</div>Order Review</div>
			</li>
		    </ul>
		</article><!-- #checkout_info -->
                
                <div class="grid_3" id="sidebar_right">
                    <aside id="checkout_progress">
                        <h3>Your Checkout Progress</h3>
                        <ul>
                            <li><a title="Edit" href="#">Edit</a>Billing Address</li>
                            <li><a title="Edit" href="#">Edit</a>Shipping Address</li>
                            <li><a title="Edit" href="#">Edit</a>Shipping Method</li>
                            <li><a title="Edit" href="#">Edit</a>Payment Method</li>
                        </ul>
                    </aside>
                </div><!-- #sidebar_right -->
                    
            </div><!-- #content -->

            <div class="clear"></div>
        </div><!-- .container_12 -->
    </section><!-- #main -->
    <div class="clear"></div>
        
    <footer>
        <div class="footer_navigation">
            <div class="container_12">
                <div class="grid_3">
                     <h3>Contact Us</h3>
                    <ul class="f_contact">
                        <li>49 Archdale, 2B Charlestone</li>
                        <li>+777 (100) 1234</li>
                        <li>mail@example.com</li>
                    </ul><!-- .f_contact -->
                </div><!-- .grid_3 -->

                <div class="grid_3">
                    <h3>Information</h3>
                    <nav class="f_menu">
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Secure payment</a></li>
                        </ul>
                    </nav><!-- .private -->
                </div><!-- .grid_3 -->

                <div class="grid_3">
                    <h3>Customer Service</h3>
                    <nav class="f_menu">
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Return</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </nav><!-- .private -->
                </div><!-- .grid_3 -->

                <div class="grid_3">
                    <h3>My Account</h3>
                    <nav class="f_menu">
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </nav><!-- .private -->
                </div><!-- .grid_3 -->
            </div><!-- .container_12 -->
            <div class="clear"></div>
            <div class="newsletter-payments">
                <div class="container_12">
                    <div class="grid_12">
                        <div class="bg-newsletter-payments">
                            <div class="newsletter">
                                <div class="newsletter-text">
                                    <div class="icon-mail">Newsletter</div>
                                    Subscribe to notifications about discounts from our store
                                </div>
                                <form>
                                    <input type="submit" value="">
                                    <input type="email" name="newsletter" value="" placeholder="Enter your email address...">
                                </form>
                            </div><!-- .newsletter -->

                            <div class="payments">
                                <img src="img/payments.png" alt="Payments">
                            </div><!-- .payments -->
                        </div><!-- .bg-newsletter-payments -->
                    </div>
                    <div class="clear"></div>
                </div><!-- .container_12 -->
            </div><!-- .newsletter-payments -->
            <div class="clear"></div>
        </div><!-- .footer_navigation -->

        <div class="footer_info">
            <div class="container_12">
                <div class="grid_6">
                    <p class="copyright">© Diamond Store Theme, 2013</p>
                </div><!-- .grid_6 -->

                <div class="grid_6">
                    <div class="soc">
                        <a class="google" href="#"></a>
                        <a class="twitter" href="#"></a>
                        <a class="facebook" href="#"></a>
                    </div><!-- .soc -->
                </div><!-- .grid_6 -->

                <div class="clear"></div>
            </div><!-- .container_12 -->
        </div><!-- .footer_info -->
    </footer>
</body>

<!-- Mirrored from html.diamond.itembridge.com/checkout.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 21 Feb 2014 08:06:53 GMT -->
</html>
