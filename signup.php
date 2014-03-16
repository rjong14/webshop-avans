<?php
include 'header.php';
$database = new Queries();
?>
   <section id="main" class="page-login">
        <div class="container_12">
            <div id="content" class="grid_12">
                <header>
                    <h1 class="page_title">Sign up</h1>
                    <?php
                    if(!isset($_SESSION['username']))
			 	 	{
		               echo'<form action = "signup.php" method="post">
		                    	<table>
		                    		<tr>
					                    	<td><label for="username">Username : </label>
					                    	<input type="text" style="width: 300px" name="username"/></td>
					                    	<td><label for="adress">Adress : </label>
					                    	<input type="text" style="width: 300px" name="adress"/><br></td>
				                    </tr>	
					                <tr>    
					                		<td><label for="password">password : </label>
					                    	<input type="password" style="width: 300px" name="password"/></td>
					                    	<td><label for="city">City : </label>
					                    	<input type="text" style="width: 300px" name="city"/><br></td>
					                </tr>
					                <tr>
					                		<td><label for="firstname">Firstname : </label>
					                    	<input type="text" style="width: 300px" name="firstname"/></td>
					                    	<td><label for="zip">Zip code : </label>
					                    	<input type="text" style="width: 300px" name="zip"/><br></td>

					                </tr>
					                <tr>
					                		<td><label for="lastname">Lastname : </label>
					                    	<input type="text" style="width: 300px" name="lastname"/><br></td>
					                    	<td><label for="email">E-mail : </label>
					                    	<input type="email" style="width: 300px" name="email"/><br></td>
					                </tr>
					             </table>   	
					             <input type="submit" value="register" name="register" />		
		                    </form>';
		            }
		            else
		            {
		            echo '<p style="font-size:20px"> You are currently logged in as ' . $_SESSION['username'] . ', please logout first </p>';
		            echo '</form>';
			 	 	echo '<form action="login.php" method="POST">';
			 	 	echo '<input type="submit" name="logout" value="logout">';
			 	 	echo '</form>';
		            }
		            ?>
                </header>
                </div><!-- .container_12 -->
            </div>
    </section><!-- #main -->
<?php
if(isset($_POST['register']))
{
	$result = $database->checkUsername($_POST['username']);
	if($result == false)
	{
		$query = $database->insertUser($_POST['username'], $_POST['password'], $_POST['firstname'], $_POST['lastname'], $_POST['adress'], $_POST['city'], $_POST['zip'], $_POST['email']);
		if($query != false)
		{
			$_SESSION['username'] = $_POST['username'];
			echo '<script>
		  		  location.reload();
		  	     </script>';
		}
	}
	
}
include 'footer.php';
?>