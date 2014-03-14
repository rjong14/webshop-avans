<?php
include 'header.php'
?>
    
    <section id="main" class="page-login">
        <div class="container_12">
            <div id="content" class="grid_12">
                <header>
                    <h1 class="page_title">Login or Create an Account</h1>
                </header>
                    
                <article>
                    <div class="grid_6 new_customers">
			<h2>New Customers</h2>
			<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
			<div class="clear"></div>
			<button class="account">Create An Account</button>
                    </div><!-- .grid_6 -->
		
                    <div class="grid_6 registed_form">
			<form class="registed">
			    <h2>Registed Customers</h2>
			    <p>If you have an account with us, please log in.</p>
			    <div class="email">
				<strong>Email Adress:</strong><sup>*</sup><br>
				<input type="email" name="" class="" value="">
			    </div><!-- .email -->
			    <div class="password">
				<strong>Password:</strong><sup>*</sup><br>
				<input type="text" name="" class="" value="">
			    </div><!-- .password -->
			    <div class="remember">
				<input class="niceCheck" type="checkbox" name="Remember_password">
				<span class="rem">Remember password</span>
			    </div><!-- .remember -->
			    <div class="submit">										
				<input type="submit" value="Login">
                                <a class="forgot" href="#">Forgot Your Password?</a>
				<span>* Required Field</span>
                                <div class="clear"></div>
			    </div><!-- .submit -->
			</form><!-- .registed -->
                    </div><!-- .grid_6 -->
		</article>
                    
                <div class="clear"></div>
            </div><!-- #content -->

            <div class="clear"></div>
        </div><!-- .container_12 -->
    </section><!-- #main -->
    <div class="clear"></div>
        
<?php
include 'footer.php'
?>