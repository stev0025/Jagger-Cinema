<?php

session_start();

$servername = "localhost";
$username = "f34ee";
$password = "f34ee";
$dbname = "f34ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM `movies` WHERE id='1'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box1 = $row['title'];
$movie_picture_box1 = $row['pict'];

$query = "SELECT * FROM `movies` WHERE id='2'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box2 = $row['title'];
$movie_picture_box2 = $row['pict'];

$query = "SELECT * FROM `movies` WHERE id='3'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box3 = $row['title'];
$movie_picture_box3 = $row['pict'];

$query = "SELECT * FROM `movies` WHERE id='4'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box4 = $row['title'];
$movie_picture_box4 = $row['pict'];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Home - Jagger Cinema</title>
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
            <div id="slideshow">
				<a href="movie.php">
				<div class="slide-section-border slide-section"></div>
				</a>
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
					<form method = "post" action = "checkout.php">
				    <table id="homepage_content_table_movie">
				        <tr>
				            <td>
								<input type="image" src="<?php echo $movie_picture_box1;?>" border="10" alt="Submit" name="selectedMovie" value="Venom">
				            </td>
				            <td>
								<input type="image" src="<?php echo $movie_picture_box2;?>" border="10" alt="Submit" name="selectedMovie" value="First Man">	
				            </td>
				            <td>
								<input type="image" src="<?php echo $movie_picture_box3;?>" border="10" alt="Submit" name="selectedMovie" value="Halloween">	
				            </td>
				            <td>
								<input type="image" src="<?php echo $movie_picture_box4;?>" border="10" alt="Submit" name="selectedMovie" value="Zombiepura">
				            </td>
				        </tr>
				        <tr>
				            <td><h3><?php echo $movie_title_box1;?>
                            </td>
				            <td><h3><?php echo $movie_title_box2;?>
							</td>
				            <td><h3><?php echo $movie_title_box3;?>
							</td>
				            <td><h3><?php echo $movie_title_box4;?>
							</td>

				        </tr>
					
				    </table>
					</form>
				    
				    <br><br>
				    <hr>
				    <br><br>
				    <h3>Latest News!</h3>
				    
				    <table id="homepage_content_table_news">
				        <tr>
				            <td colspan="2">
				                <img id="home_ads_wide" src="ads\ads_wide.jpg">
				            </td>
				            <td>
				                <img id="home_ads" src="ads\ads1.jpg" alt="NTU">
				            </td>
				        </tr>
				        <tr>
				            <td>
				                <img id="home_ads" src="ads\ads2.jpg">
				            </td>
				            <td>
				                <img id="home_ads" src="ads\ads3.jpg">
				            </td>
				            <td>
				                <img id="home_ads" src="ads\ads4.jpg">				            
							</td>
				        </tr>
				        
				        
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