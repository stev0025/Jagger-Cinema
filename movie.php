<?php
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
$movie_detail1_box1 = $row['detail1'];
$movie_detail2_box1 = $row['detail2'];
$movie_description_box1 = $row['description'];

$query = "SELECT * FROM `movies` WHERE id='2'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box2 = $row['title'];
$movie_picture_box2 = $row['pict'];
$movie_detail1_box2 = $row['detail1'];
$movie_detail2_box2 = $row['detail2'];
$movie_description_box2 = $row['description'];

$query = "SELECT * FROM `movies` WHERE id='3'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box3 = $row['title'];
$movie_picture_box3 = $row['pict'];
$movie_detail1_box3 = $row['detail1'];
$movie_detail2_box3 = $row['detail2'];
$movie_description_box3 = $row['description'];

$query = "SELECT * FROM `movies` WHERE id='4'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box4 = $row['title'];
$movie_picture_box4 = $row['pict'];
$movie_detail1_box4 = $row['detail1'];
$movie_detail2_box4 = $row['detail2'];
$movie_description_box4 = $row['description'];

$query = "SELECT * FROM `movies` WHERE id='5'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box5 = $row['title'];
$movie_picture_box5 = $row['pict'];
$movie_detail1_box5 = $row['detail1'];
$movie_detail2_box5 = $row['detail2'];
$movie_description_box5 = $row['description'];

$query = "SELECT * FROM `movies` WHERE id='6'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box6 = $row['title'];
$movie_picture_box6 = $row['pict'];
$movie_detail1_box6 = $row['detail1'];
$movie_detail2_box6 = $row['detail2'];
$movie_description_box6 = $row['description'];

$query = "SELECT * FROM `movies` WHERE id='7'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box7 = $row['title'];
$movie_picture_box7 = $row['pict'];
$movie_detail1_box7 = $row['detail1'];
$movie_detail2_box7 = $row['detail2'];
$movie_description_box7 = $row['description'];

$query = "SELECT * FROM `movies` WHERE id='8'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box8 = $row['title'];
$movie_picture_box8 = $row['pict'];
$movie_detail1_box8 = $row['detail1'];
$movie_detail2_box8 = $row['detail2'];
$movie_description_box8 = $row['description'];

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Movie - Jagger Cinema</title>
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
						<a href="registration.php"><input class="btn_reg" type="button" value="register"></a>
						<a href="login.php"><input class="btn_log" type="button" value="login"></a>

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
				    <table id="hmoviepagetable_movie" border="1">
						<tr>
				            <td>
				                <img id="home_movie_pict" src="<?php echo $movie_picture_box1;?>">
				            </td>
				            
				            <td id="movie_description">
				                <h3><?php echo $movie_title_box1;?></h3>
								<br><br><br>
								<h3>Details</h3>
								<table style="width:100%;">
									<tr>
										<td>
											<p><?php echo $movie_detail1_box1;?></p>
										</td>
										<td>
											<p><?php echo $movie_detail2_box1;?></p>
										</td>
									</tr>
								</table>
								<br><br>
								<h3>Synopsis</h3>
								<p><?php echo $movie_description_box1;?></p>
				            </td>
				        </tr>
						<tr>
				            <td>
				                <img id="home_movie_pict" src="<?php echo $movie_picture_box2;?>">
				            </td>
				            
				            <td id="movie_description">
				                <h3><?php echo $movie_title_box2;?></h3>
								<br><br><br>
								<h3>Details</h3>
								<table style="width:100%;">
									<tr>
										<td>
											<p><?php echo $movie_detail1_box2;?></p>
										</td>
										<td>
											<p><?php echo $movie_detail2_box2;?></p>
										</td>
									</tr>
								</table>
								<br><br>
								<h3>Synopsis</h3>
								<p><?php echo $movie_description_box2;?></p>
				            </td>
				        </tr>
						<tr>
				            <td>
				                <img id="home_movie_pict" src="<?php echo $movie_picture_box3;?>">
				            </td>
				            
				            <td id="movie_description">
				                <h3><?php echo $movie_title_box3;?></h3>
								<br><br><br>
								<h3>Details</h3>
								<table style="width:100%;">
									<tr>
										<td>
											<p><?php echo $movie_detail1_box3;?></p>
										</td>
										<td>
											<p><?php echo $movie_detail2_box3;?></p>
										</td>
									</tr>
								</table>
								<br><br>
								<h3>Synopsis</h3>
								<p><?php echo $movie_description_box3;?></p>
				            </td>
				        </tr>
						<tr>
				            <td>
				                <img id="home_movie_pict" src="<?php echo $movie_picture_box4;?>">
				            </td>
				            
				            <td id="movie_description">
				                <h3><?php echo $movie_title_box1;?></h3>
								<br><br><br>
								<h3>Details</h3>
								<table style="width:100%;">
									<tr>
										<td>
											<p><?php echo $movie_detail1_box4;?></p>
										</td>
										<td>
											<p><?php echo $movie_detail2_box4;?></p>
										</td>
									</tr>
								</table>
								<br><br>
								<h3>Synopsis</h3>
								<p><?php echo $movie_description_box4;?></p>
				            </td>
				        </tr>
						<tr>
				            <td>
				                <img id="home_movie_pict" src="<?php echo $movie_picture_box5;?>">
				            </td>
				            
				            <td id="movie_description">
				                <h3><?php echo $movie_title_box5;?></h3>
								<br><br><br>
								<h3>Details</h3>
								<table style="width:100%;">
									<tr>
										<td>
											<p><?php echo $movie_detail1_box5;?></p>
										</td>
										<td>
											<p><?php echo $movie_detail2_box5;?></p>
										</td>
									</tr>
								</table>
								<br><br>
								<h3>Synopsis</h3>
								<p><?php echo $movie_description_box5;?></p>
				            </td>
				        </tr>
						<tr>
				            <td>
				                <img id="home_movie_pict" src="<?php echo $movie_picture_box6;?>">
				            </td>
				            
				            <td id="movie_description">
				                <h3><?php echo $movie_title_box1;?></h3>
								<br><br><br>
								<h3>Details</h3>
								<table style="width:100%;">
									<tr>
										<td>
											<p><?php echo $movie_detail1_box6;?></p>
										</td>
										<td>
											<p><?php echo $movie_detail2_box6;?></p>
										</td>
									</tr>
								</table>
								<br><br>
								<h3>Synopsis</h3>
								<p><?php echo $movie_description_box6;?></p>
				            </td>
				        </tr>
						<tr>
				            <td>
				                <img id="home_movie_pict" src="<?php echo $movie_picture_box7;?>">
				            </td>
				            
				            <td id="movie_description">
				                <h3><?php echo $movie_title_box7;?></h3>
								<br><br><br>
								<h3>Details</h3>
								<table style="width:100%;">
									<tr>
										<td>
											<p><?php echo $movie_detail1_box7;?></p>
										</td>
										<td>
											<p><?php echo $movie_detail2_box7;?></p>
										</td>
									</tr>
								</table>
								<br><br>
								<h3>Synopsis</h3>
								<p><?php echo $movie_description_box7;?></p>
				            </td>
				        </tr>
						<tr>
				            <td>
				                <img id="home_movie_pict" src="<?php echo $movie_picture_box8;?>">
				            </td>
				            
				            <td id="movie_description">
				                <h3><?php echo $movie_title_box8;?></h3>
								<br><br><br>
								<h3>Details</h3>
								<table style="width:100%;">
									<tr>
										<td>
											<p><?php echo $movie_detail1_box8;?></p>
										</td>
										<td>
											<p><?php echo $movie_detail2_box8;?></p>
										</td>
									</tr>
								</table>
								<br><br>
								<h3>Synopsis</h3>
								<p><?php echo $movie_description_box8;?></p>
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
                                    <p><a href = "https://google.com/">Home</a></p>
                                    <p><a href = "https://google.com/">About JC</a></p>
                                    <p><a href = "https://google.com/">Jobs at JC</a></p>
                                </td>
                                
                                <td>
                                    <p><a href = "https://www.facebook.com/"><img id="fb_logo" src="https://www.facebook.com/images/fb_icon_325x325.png"></a></p>
                                    <p><a href = "https://www.instagram.com/"><img id="fb_logo" src="https://instagram-brand.com/wp-content/themes/ig-branding/assets/images/ig-logo-email.png"></a></p>
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