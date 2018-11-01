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

$movie = $_SESSION['movie'];



$query = "SELECT * FROM `movies` WHERE title='$movie'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box1 = $row['title'];
$movie_picture_box1 = $row['pict'];
$movie_detail1_box1 = $row['detail1'];
$movie_detail2_box1 = $row['detail2'];
$movie_description_box1 = $row['description'];


function resultToArray($result) {
    $rows = array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

$queryAvail = "SELECT * FROM `availability` WHERE title='$movie'";
$resultAvail = $conn->query($queryAvail);
$rowAvail = resultToArray($resultAvail);
//var_dump($rowAvail);

#if(isset($_POST['date'])){
$date = $_POST['dateBox'];
#}

$timing = $_POST['timingBtn'];
$queryBoxes = "SELECT * FROM `availability` WHERE title='$movie' AND dayofweek='$date' AND timing='$timing'";
$resultBoxes = $conn->query($queryBoxes);
$rowBoxes = resultToArray($resultBoxes);
#var_dump($rowBoxes);
print_r ($rowBoxes);
#Array ( [0] => Array ( [id] => 1 [title] => Venom [dayofweek] => 1-Nov-2018 [timing] => 0930 [seatcode] => 0 [bookingstatus] => 0 ) )
echo $rowBoxes[0]['bookingstatus'];
echo $rowBoxes[0]['timing'];


#echo $rowBoxes[1][1];

###check array
foreach ($rowBoxes as $item=>$value){
#	echo $item;
#	echo $value;
}



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
				var seats = document.getElementsByName("seating");
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
                        <tr>
							<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
								<td id="checkout_content_td_timing">
									
									<table>
										<tr>
											<td>
												<br>
												Date: <Select name = "dateBox">
													<option value = "1-Nov-2018">01/11/18</option>
													<option value = "2-Nov-2018">02/11/18</option>
													<option value = "01/10/18">01/10/18</option>
													<option value = "01/10/18">01/10/18</option>
													<option value = "01/10/18">01/10/18</option>
													<option value = "01/10/18">01/10/18</option>
													<option value = "01/10/18">01/10/18</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												Timing:<br>
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
                        <tr>
							<td id="checkout_content_td_seating">
								<table>
								<?php
                                    echo '<tr>';
									echo	'<span>A</span>';
										for($x = 0; $x <= 5; $x++) {
											if ($rowBoxes[$x]['bookingstatus'] == '0') {
												echo '<input class="empty" type="checkbox" name="seating" value="empty">';
											}
											else {
												echo '<input class="booked" type="checkbox" name="seating" value="booked" disabled>';
											}
										}
									echo	'<span>A</span><br>';
									echo	'</tr>';

									echo '<tr>';
									echo	'<span>B</span>';
										for($x = 6; $x <= 11; $x++) {
											if ($rowBoxes[$x]['bookingstatus'] == '0') {
												echo '<input class="empty" type="checkbox" name="seating" value="empty">';
											}
											else {
												echo '<input class="booked" type="checkbox" name="seating" value="booked" disabled>';
											}
										}
									echo	'<span>B</span><br>';
									echo	'</tr>';

									echo '<tr>';
									echo	'<span>C</span>';
										for($x = 12; $x <= 17; $x++) {
											if ($rowBoxes[$x]['bookingstatus'] == '0') {
												echo '<input class="empty" type="checkbox" name="seating" value="empty">';
											}
											else {
												echo '<input class="booked" type="checkbox" name="seating" value="booked" disabled>';
											}
										}
									echo	'<span>C</span><br>';
									echo	'</tr>';

									echo '<tr>';
									echo	'<span>D</span>';
										for($x = 18; $x <= 23; $x++) {
											if ($rowBoxes[$x]['bookingstatus'] == '0') {
												echo '<input class="empty" type="checkbox" name="seating" value="empty">';
											}
											else {
												echo '<input class="booked" type="checkbox" name="seating" value="booked" disabled>';
											}
										}
									echo	'<span>D</span><br>';
									echo	'</tr>';

								?>
								
								</table>
								<span id="total"></span>	

                            </td>
                        </tr>
                        <tr>
                            <td id="checkout_content_td_payment">
                                <hr>
                                
                        		<table border="1">
                        			<tr>
                        				<th>Ticket</th>
                        				<th>Price</th>
                        				<th>Q</th>
                        				<th>Total Amount</th>
                        			</tr>
                        			<tr>
                        				<td><?php echo $movie?></td>
                        				<td>$5</td>
                        				<td id = "quantity"></td>
                        				<td id = "total1"></td>
                        			</tr>
                        			<tr>
                        			    <td colspan="3">Total</td>
                        			    <td id = "total2"></td>
                        			</tr>
                        		</table>
                        		<br><br>
                        		<fieldset style="border:0px">
                        		    <label>Email: <input></label><br><br>
                        		    <label>Name: <input></label>
                        		</fieldset>
                        		<br><br>
                        		<p>Payment type:</p>
                        		<input type="radio" checked> Visa
						        <input type="radio"> Paypal
						        <input type="radio"> Master
                        		                            
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