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

$movie = $_POST['selectedMovie'];
$_SESSION['movie'] = $movie;


// Retrieve movie information
$query = "SELECT * FROM `movies` WHERE title='$movie'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box1 = $row['title'];
$movie_picture_box1 = $row['pict'];
$movie_detail1_box1 = $row['detail1'];
$movie_detail2_box1 = $row['detail2'];
$movie_description_box1 = $row['description'];

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Checkout - Jagger Cinema</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design_2.css">
		<style>	
			.empty {
				background-color: #0000cd;
				-webkit-appearance: none;
				cursor: pointer;
				height: 25px;
				width: 25px;
				border-radius: 5px;
			}
			
			.empty:hover {
				background-color: #4169e1;
			}

			.empty:checked {
				background-color: #8470ff;
			}
			
			.booked {
				background-color: #800080;
				-webkit-appearance: none;
				cursor: pointer;
				height: 25px;
				width: 25px;
				border-radius: 5px;
			}
			
			.booked:hover {
				cursor: context-menu;
			}

		</style>
		<script>
		//Calculate number of seats checked and total price		
			function calculateSeat() {
				var quan = 0;
				var seats = document.getElementsByName("seating[]");
				for (var i = 0, length = seats.length; i < length; i++)
				{
					if (seats[i].checked)
					{
						quan +=1;
					}
				}

				document.getElementById("quantity").innerHTML = quan;
				document.getElementById("total1").innerHTML = "$" + quan * 5;
				document.getElementById("total2").innerHTML = "$" + quan * 5;
				
			}

			function calculatePrice() {

				calculateSeat();

			}
			setInterval(calculatePrice, 50);
		</script>
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
					
                    <table id="checkout_content_table">
                        <tr>
                            <td id="checkout_content_td_picture" rowspan="4">
                                <img src="<?php echo $movie_picture_box1;?>">
                            </td>
                            <td id="checkout_content_td_description">
                                <table>
                                    <tr>
                                        <td>
                                            Details: <br>
											Title: <?php echo $movie;?><br>
                                            <?php echo $movie_detail1_box1;?>
                                        </td>
                                        <td>
											<?php echo $movie_detail2_box1;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>Synopsis:</p>
											<?php echo $movie_description_box1;?>
                                        <hr>
										</td>
                                    </tr>
									
                                    
                                </table>
                            </td>
						</tr>
						<form action= "checkout2.php" method="post">
                        <tr>
							
								<td id="checkout_content_td_timing">
									
									<table>
										<tr>
											<td>
												<br>
												Date: <Select name = "dateBox">
													<option value = "14-Nov-2018">14/11/18</option>
													<option value = "15-Nov-2018">15/11/18</option>
													<option value = "16-Nov-2018">16/11/18</option>
												</select>
												<br><br>
											
											</td>
										</tr>
										<tr>
											<td>
												<br>
												<input class="checkout_timing_btn" name = "timingBtn" type="submit" value="0930">
												<input class="checkout_timing_btn" name = "timingBtn" type="submit" value="1130">
												<input class="checkout_timing_btn" name = "timingBtn" type="submit" value="1430"><br>
												<input class="checkout_timing_btn" name = "timingBtn" type="submit" value="1730">
												<input class="checkout_timing_btn" name = "timingBtn" type="submit" value="2030"><br><br>
												
											</td>
										</tr>
									</table>
								</td>
							</form>
                        </tr>
						
						
                    </table>
						
						</form>
					
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