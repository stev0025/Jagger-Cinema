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


// Retrieve movie information
$query = "SELECT * FROM `movies` WHERE title='$movie'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$movie_title_box1 = $row['title'];
$movie_picture_box1 = $row['pict'];
$movie_detail1_box1 = $row['detail1'];
$movie_detail2_box1 = $row['detail2'];
$movie_description_box1 = $row['description'];

// Function to append retrieved information into an array
function resultToArray($result) {
    $rows = array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

// Retrieve availability table from database (360 variables)
$queryAvail = "SELECT * FROM `availability` WHERE title='$movie'";
$resultAvail = $conn->query($queryAvail);
$rowAvail = resultToArray($resultAvail);
//var_dump($rowAvail);

### Retrieve availability table from database (24 variables) 
if(isset($_POST['dateBox'])){
	$date = $_POST['dateBox'];
	$_SESSION['date'] = $date;
	$timing = $_POST['timingBtn'];
	$_SESSION['timing'] = $timing;
	$queryBoxes = "SELECT * FROM `availability` WHERE title='$movie' AND dayofweek='$date' AND timing='$timing'";
	$resultBoxes = $conn->query($queryBoxes);
	$rowBoxes = resultToArray($resultBoxes);
	#var_dump($rowBoxes);
	#print_r ($rowBoxes);
	#Array ( [0] => Array ( [id] => 1 [title] => Venom [dayofweek] => 1-Nov-2018 [timing] => 0930 [seatcode] => 0 [bookingstatus] => 0 ) )
	#echo $rowBoxes[0]['bookingstatus'];
	#echo $rowBoxes[0]['timing'];
}

#echo $rowBoxes[1][1];

###check array
#foreach ($rowBoxes as $item=>$value){
#	echo $item;
#	echo $value;
#}


// When checkout button is clicked, check if email & name is input, then submit order
if(isset($_POST['checkoutBtn'])) {
	$timing = $_SESSION['timing'];
	$date = $_SESSION['date'];
	$queryBoxes = "SELECT * FROM `availability` WHERE title='$movie' AND dayofweek='$date' AND timing='$timing'";
	$resultBoxes = $conn->query($queryBoxes);
	$rowBoxes = resultToArray($resultBoxes);
	#print_r($seating);
	if(!empty($_POST['emailBox']) and !empty($_POST['nameBox'])){		
		$email = $_POST['emailBox'];
		$name = $_POST['nameBox'];
		$payment = $_POST['payment'];
		$_SESSION['email'] = $email;###
		$_SESSION['name'] = $name;###
		$_SESSION['payment'] = $payment;###
		include 'send_email.php'; #send email to user
		#echo $email;
		#echo $name;
		if(!empty($_POST['seating'])){
			foreach($_POST['seating'] as $selected){
				$queryUpdate = "UPDATE `availability` SET bookingstatus = '1' WHERE title='$movie' AND dayofweek='$date' AND timing='$timing' AND seatcode ='$selected'";
				$result = $conn->query($queryUpdate);
				#echo $selected."</br>";	
				#$queryOrders = "INSERT INTO orders (title, email, seat, dayofweek, timing) VALUES ('$movie', '$email', $selected, $date, $timing)";
				$queryOrders = "INSERT INTO orders (title, email, seat, dayofweek, timing, nameCustomer, payment) VALUES ('".$movie."', '".$email."', '".$selected."', '".$date."', '".$timing."', '".$name."', '".$payment."')";
				#echo $movie." ".$email." ".$selected." ".$date." ".$timing;
				$result = $conn->query($queryOrders);				

			}
			echo "<script>alert('Tickets successfully purchased! Please check your email. Thank you! - Management Team');</script>";
			###Actual update of database
			
		}
	}
	else {
		echo "PLEASE ENTER BOTH YOUR EMAIL ADDRESS AND NAME!";
	}

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
			
			.transparent_box {
				background-color: transparent;
				-webkit-appearance: none;
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
						<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
												Day selected: <?php echo $date; ?>
											</td>
										</tr>
										<tr>
											<td>
												Timing selected: <?php echo $timing; ?><br>
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
							
							<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
								<td id="checkout_content_td_seating">
									<hr>
									<table>
									<?php
										echo '<tr>';
										echo '<h3> screen </h3>';
										echo '</tr>';
										
										echo '<tr>';
										echo	'<span>A</span>';
											for($x = 0; $x <= 5; $x++) {
												if ($rowBoxes[$x]['bookingstatus'] == '0') {
													echo '<input class="empty" type="checkbox" name="seating[]" value="'.$x.'">';
												}
												else {
													echo '<input class="booked" type="checkbox" name="seating[]" value="booked" disabled>';
												}

												if ($x == '1' || $x == '3' ) {
													echo '<input class="transparent_box" type="checkbox" disabled>';
												}



											}
										echo	'<span>A</span><br>';
										echo	'</tr>';

										echo '<tr>';
										echo	'<span>B</span>';
											for($x = 6; $x <= 11; $x++) {
												if ($rowBoxes[$x]['bookingstatus'] == '0') {
													echo '<input class="empty" type="checkbox" name="seating[]" value="'.$x.'">';
												}
												else {
													echo '<input class="booked" type="checkbox" name="seating[]" value="booked" disabled>';
												}

												if ($x == '7' || $x == '9' ) {
													echo '<input class="transparent_box" type="checkbox" disabled>';
												}
											}
										echo	'<span>B</span><br>';
										echo	'</tr>';

										echo '<tr>';
										echo	'<span>C</span>';
											for($x = 12; $x <= 17; $x++) {
												if ($rowBoxes[$x]['bookingstatus'] == '0') {
													echo '<input class="empty" type="checkbox" name="seating[]" value="'.$x.'">';
												}
												else {
													echo '<input class="booked" type="checkbox" name="seating[]" value="booked" disabled>';
												}

												if ($x == '13' || $x == '15' ) {
													echo '<input class="transparent_box" type="checkbox" disabled>';
												}
											}
										echo	'<span>C</span><br>';
										echo	'</tr>';

										echo '<tr>';
										echo	'<span>D</span>';
											for($x = 18; $x <= 23; $x++) {
												if ($rowBoxes[$x]['bookingstatus'] == '0') {
													echo '<input class="empty" type="checkbox" name="seating[]" value="'.$x.'">';
												}
												else {
													echo '<input class="booked" type="checkbox" name="seating[]" value="booked" disabled>';
												}

												if ($x == '19' || $x == '21' ) {
													echo '<input class="transparent_box" type="checkbox" disabled>';
												}
											}
										echo	'<span>D</span><br>';
										echo	'</tr>';

									?>
									</table><br>
									<p>
										Empty<input class="empty" type="checkbox" disabled>
										Selected<input class="empty" type="checkbox" checked disabled>
										Booked<input class="booked" type="checkbox" value="booked" disabled>

								</td>
								
									                            

							
                        </tr>
                        <tr>
                            <td id="checkout_content_td_payment">
                                <hr>
                                
                        		<table border="1">
                        			<tr>
                        				<th><h3>Ticket</th>
                        				<th><h3>Price</th>
                        				<th><h3>Q</th>
                        				<th><h3>Total Amount</th>
                        			</tr>
                        			<tr>
                        				<td><?php echo $movie?></td>
                        				<td>$5</td>
                        				<td id = "quantity" name = "quantityBox"></td>
                        				<td id = "total1" name = "totalBox"></td>
                        			</tr>
                        			<tr>
                        			    <td colspan="3">Total</td>
                        			    <td id = "total2"></td>
                        			</tr>
                        		</table>
                        		<br><br>
								<?php
								if (isset($_SESSION['valid_user']))
								{
								echo '<h3>Ordered by ' .$_SESSION['valid_user'].' </h3>';
								echo '<input type="hidden" name="emailBox" value="' .$_SESSION['valid_user']. '">';
								echo '<input type="hidden" name="nameBox" value="customer_login">';
								}
								
								else {
                        		echo '<fieldset style="border:0px">';
                        		echo '    <label>Email: <input name="emailBox"></label><br><br>';
                        		echo '    <label>Name: <input name="nameBox"></label>';
                        		echo '</fieldset>';
								}
								
								?>

                        		<br><br>
                        		<p>Payment type:</p>
                        		<input type="radio" name="payment" value="visa" checked> Visa
						        <input type="radio" name="payment" value="paypal"> Paypal
						        <input type="radio" name="payment" value="master"> Master
							</td>
						</tr>
						
                    </table>
						<input class="checkout_timing_btn" name = "checkoutBtn" type="submit" value="Check Out">
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