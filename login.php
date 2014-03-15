<?php
include 'header.php';
$database = new Queries();
?>
    
    <section id="main" class="page-login">
        <div class="container_12">
            <div id="content" class="grid_12">
                <header>
                    <h1 class="page_title">Login or Create an Account</h1>
                </header>
                    
                <article>
                	



                	<form action ="login.php"method="post">
                    <div class="grid_6 new_customers">
             <?php 
             if(!isset($_SESSION['username']))
             {
             	echo '<h2>New Customers</h2>
					  <p>By creating an account with our store, you will be able to move through the checkout process faster, 
					  store multiple shipping addresses, view and track your orders in your account and more.</p>';
			 } else {
			 	echo '<p>You are already logged in ' . $_SESSION['username'] . '</p>';
			 }
             ?>

			
			<div class="clear"></div>
			 <div class="submit">
			 	<?php 
			 	 if(!isset($_SESSION['username']))
			 	 {
			 	 	echo '<input type="submit" name="register" value="register">';
			 	 }
			 	 else
			 	 {
			 	 	echo '<input type="submit" name="logout" value="log out">';
			 	 }
			 	?>								
				
    
                    <div class="clear"></div>
			    </div><!-- .submit -->
                    </div><!-- .grid_6 -->
					</form>
					<?php 
					if(!isset($_SESSION['username']))
					{
                    echo '<div class="grid_6 registed_form">
			<form class="registed" action ="login.php"method="post">
			    <h2>Registed Customers</h2>
			    <p>If you have an account with us, please log in.</p>
			    <div class="text">
				<strong>Username:</strong><sup>*</sup><br>
				<input type="text" name="username" class="" value="">
			    </div><!-- .email -->
			    <div class="password">
				<strong>Password:</strong><sup>*</sup><br>
				<input type="password" class = "text" name="password" class="" value="">
			    </div><!-- .password -->
			    <div class="remember">
				<input class="niceCheck" type="checkbox" name="Remember_password">
				<span class="rem">Remember password</span>
			    </div><!-- .remember -->
			    <div class="submit">										
				<input type="submit" name="login" value="Login">
                                <a class="forgot" href="#">Forgot Your Password?</a>
				<span>* Required Field</span>
                                <div class="clear"></div>
			    </div><!-- .submit -->
			</form><!-- .registed -->
                    </div><!-- .grid_6 -->';
                }
                    ?>

		</article>
                    
                <div class="clear"></div>
            </div><!-- #content -->

            <div class="clear"></div>
        </div><!-- .container_12 -->
    </section><!-- #main -->
    <div class="clear"></div>
        
<?php
if(isset($_POST['login']))
{
	if(isset($_POST['password']) && isset($_POST['username']))
	{
		$login = $database->checkLogin($_POST['username'], $_POST['password']);
		if($login != false)
		{
			$_SESSION['username'] = $login[0]['gebruikersnaam'];
			$_SESSION['userid'] = $login[0]['id'];
			echo '<script>
				  location.reload();
				  </script>';

		}
		
	}
}
if(isset($_POST['logout']))
{
	session_destroy();
	echo '<script>
		  location.reload();
		  </script>';
	
}
include 'footer.php'
?>