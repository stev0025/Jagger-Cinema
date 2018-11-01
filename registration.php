<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Registration - Jagger Cinema</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design_2.css">
		<style>
			legend {
				background-color: white;
				color: black;
			}
		</style>
		<script type="text/javascript" src="reg_validator.js"></script>
		
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
				<img id="content_logo_pict">			
				<form action="register.php" method="POST" id="reg_form">
					<table style="color:white;" id="login_content_table">
					    <tr><td>
					<fieldset id="login_content_fieldset"><legend>Login Info</legend>
					<label>E-mail:
					<input type="email" name="email" id="email" size="30"></label> <br><br>
					<label>Password:
					<input type="password" name="password" id="password"></label> <br><br>
					<label>Password confirmation:
					<input type="password" name="password2" id="password2"></label>
					</fieldset>
					<br><br>
					
					<fieldset id="login_content_fieldset"><legend>Personal Info</legend>
					<label>Name:
					<input type="text" name="name" id="name" size="30"></label> <br><br>
					<label>Salutation:
					<select name="salutation">
						<option value="Mr.">Mr.</option>
						<option value="Mrs.">Mrs.</option>
						<option value="Ms.">Ms.</option>
						<option value="Mdm.">Mdm.</option>
					</select>
					</label> <br><br>
					<label>Mobile Number:
					<input type="text" name="phonenumber"></label>
					</fieldset>
					<br>
					<input type="reset" value="Reset">
					<input type="submit" value="Submit">
					<br><br>
					</td></tr>
					</table>
					
				</form>
				<script type="text/javascript">
					document.getElementById("reg_form").onsubmit = validateForm;
				</script>
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