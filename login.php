<?php //login page

session_start();

$servername = "localhost";
$username = "f34ee";
$password = "f34ee";
$dbname = "f34ee";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn){
		echo "Database in not online";
		exit;
}

if (isset($_POST['email']) && isset($_POST['password'])) {
	//user tried to log in
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = "SELECT * from customers where email='$email' and password = '$password'";

	$result = $conn->query($query);
	if ($result-> num_rows > 0 )
	{
		// if they are in the database register the user id
		$_SESSION['valid_user'] = $email;
	}
}


$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Login - Jagger Cinema</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design_2.css">
 
    </head>

	<body>
		<div id="wrapper">
			<div id="header">
				<div id="header_section">
					<div id="logo">
						<a href="homepage.php"><img id="logo_pict"></a>

					</div>

					<div id="login_reg">
					
						<?php
						if (isset($_SESSION['valid_user']))
						{
						echo '<h3>Hi, ' .$_SESSION['valid_user'].' </h3>';
						echo '<a href="logout.php">Logout</a>';
						}
						
						else {
						echo "<a href='registration.php'><input class='btn_reg' type='button' value='register'></a>";
						echo "<a href='login.php'><input class='btn_log' type='button' value='login'></a>";
						}
						
						?>
					</div>
				</div>
			</div>
			
			<div id="navigation">
				<div id="navigation_section">
					<div id="nav_box">
						
						<a href="movie.php">
							Movies
						</a>
														
						<a href="about_us.php">
							About Us
						</a>
							
						<a href="contact_us.php">
							Contact Us
						</a>
						
						<a href="jobs.php">						
							Jobs
						</a>
							
						           
					</div>         
				</div>
			</div>
			
			
			<div id="content">
				<div id="login_content_section">				
				<br><br><br>
				<?php
				
				
				if (isset($_SESSION['valid_user']))
				{	
					echo '<table id="login_content_table"><tr><td>';
					echo '<h3>Welcome ' .$_SESSION['valid_user']. '</h3><br>';
					echo '<a href="logout.php">Logout</a><br><br>';
					echo '</td></tr></table>';
				}
				else
				{
					if (isset($email))
					{
						// if they failed to log in
						echo '<p style="color:red; text-align:center; text-decoration: underline;">Invalid email or password.</p>';
					}
					
				// the form to log in
				
				echo '<form method="post" action="login.php">';
				echo '	<table id="login_content_table">';
				echo '	    <tr><td>';
				echo '		<fieldset id="login_content_fieldset">';
				echo '		<table><tr>';
				echo '      	<td>E-mail:</td>';
				echo ' 			<td><input type="email" name="email" size="50"></td></tr>';
				echo '		<tr>';
				echo '			<td>Password:</td>';
				echo '			<td><input type="password" name="password" size="30"></td></tr></table>';
				echo '		</fieldset><br>';
	
				echo '		<input style="float:left;width:150px;" class="btn_log" type="submit" value="login"><br><br>';
				echo '		<p>No Account? <a href="registration.php">sign up</a></p><br><br>';
					
				echo '		</td></tr>';
				echo '	</table>';
					
				echo '</form>';
				}
				
				?>
				
				
				
				</div>
			</div>
			
			
			
			<div id="footer">
                <div id="footer_section">
                    <div id="footer_content">
                        <br>
                        <p><table id="footer_table">
                            <tr>
                                <th colspan="1">Information</th>
                                <th colspan="1">Follow Us</th>
                                <th colspan="1">Secure Payment</th>
                                <th colspan="1">Certified</th>
                            </tr>
                            <tr>
                                <td>
                                    <p><a href = "homepage.php">Home</a></p>
                                    <p><a href = "about_us.php">About JC</a></p>
                                    <p><a href = "jobs.php">Jobs at JC</a></p>
                                </td>
                                
                                <td>
                                    <p><a href = "https://www.facebook.com/" target="_blank"><img id="fb_logo" src="https://www.facebook.com/images/fb_icon_325x325.png"></a></p>
                                    <p><a href = "https://www.instagram.com/" target="_blank"><img id="fb_logo" src="https://instagram-brand.com/wp-content/themes/ig-branding/assets/images/ig-logo-email.png"></a></p>
                                </td>
                                
                                <td>
                                    <p><img id="visa_logo" src="https://media.gv.com.sg/cms/resources/templating-kit/themes/gv/images/preferred-card.png">
                                    <p><img id="visa_logo" src="https://www.gv.com.sg/media/cms/resources/templating-kit/themes/gv/images/visacheckoutmark.png">
                                </td>
                                
                                <td>
                                    <p><img id="cert_logo" src="https://media.gv.com.sg/cms/resources/templating-kit/themes/gv/images/Logo_SQC_S-CLASS.GIF">
                                </td>
                                
                            </tr>
                        </table>    
                       
                <div id="footer_copyright">
                    <p style="font-size:90%;">©2018 Jagger Cinema Pte Ltd. All rights reserved. No part of this website may be reproduced in any form without our written permission.</p>
                </div>        
					</div>
				</div>        
        </div>
	</div>
	</body>
</html>