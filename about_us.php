<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>About Us - Jagger Cinema</title>
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
				<div id="content_section">
								
				<table>
				<tr style=" margin: 10px;">
				<td style="text-align:left; max-width: 600px; padding-right: 60px;">
					<h1><img id="content_logo_pict">About Jagger Cinemas</h1>
					<p>Jagger Cinema is an emerging cinema franchise alongside big-name players
						within Singapore such as Golden Village and Shaw theatres.<br>The newest, hottest
						movies are screened here and we ensure that any esteemed customers will find an
						unequaled experience in movie-watching here.<br>We utilize 4K-resolution top-of-the-
						end screen projectors with Dolby surround sound 7.1 for every theatre to maximize
						our customer’s enjoyment factor.<br>Established in 2018, Jagger Cinema aims to
						provide the widest choice of movies and maximum level of comfort for any enthusiastic visitor.
					</p>
				</td>
				<td>
					<img style="max-width: 300px;" src="location.JPG"><br>
					<p>Happy Boulevard #05-115<br>
						Happy Mall<br>
						Singapore 659283</p>
				</td>
				
				</table>
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