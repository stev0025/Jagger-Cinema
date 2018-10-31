<?php
 echo "yihaaaa";
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
					<form>
                    <table id="checkout_content_table">
                        <tr>
                            <td id="checkout_content_td_picture" rowspan="4">
                                <img src="https://www.gv.com.sg/media/imagesresize/img6360.jpg">
                            </td>
                            <td id="checkout_content_td_description">
                                <table>
                                    <tr>
                                        <td>
                                            Details<br>
                                            Cast:  Bradley Cooper, Lady Gaga<br>
                                            
                                            Director:  Bradley Cooper<br>
                                            
                                            Genre:  Romance/ Drama<br>
                                        </td>
                                        <td>
                                            Release:  04-10-2018<br>
                                            
                                            Running Time:  136 minutes<br>
                                            
                                            Distributor:  WB<br>
                                            
                                            Language:  English(Sub: Chinese)<br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>Synopsis</p>
                                            A Star is Born stars four-time Oscar nominee Bradley Cooper (American Sniper, American Hustle, Silver Linings Playbook) 
                                            and multiple award-winning, Oscar-nominated music superstar Lady Gaga, in her first leading role in a major motion picture. 
                                            Cooper helms the drama, marking his directorial debut. In this new take on the tragic love story, he plays seasoned 
                                            musician Jackson Maine, who discovers and falls in love with struggling artist Ally (Gaga). She has just about given up 
                                            on her dream to make it big as a singer until Jack coaxes her into the spotlight. But even as Ally's career takes off, 
                                            the personal side of their relationship is breaking down, as Jack fights an ongoing battle with his own internal demons. 
                                        <hr>
										</td>
                                    </tr>
									
                                    
                                </table>
                            </td>
                        </tr>
                        <tr>
						
                            <td id="checkout_content_td_timing">
                                
                                <table>
                                    <tr>
                                        <td>
                                            <br>
											Date: <Select>
												<option value = "01/10/18">01/10/18</option>
												<option value = "01/10/18">01/10/18</option>
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
                                            <input class="checkout_timing_btn" type="submit" value="09.30">
											<input class="checkout_timing_btn" type="submit" value="11.30">
											<input class="checkout_timing_btn" type="submit" value="14.30"><br>
                                            <input class="checkout_timing_btn" type="submit" value="17.30">
											<input class="checkout_timing_btn" type="submit" value="20.30"><br><br>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td id="checkout_content_td_seating">
                                <table>
                                    <tr>
										<span>A</span>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<span>A</span><br>
									</tr>
                                    <tr>
										<span>B</span>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<span>B</span><br>
									</tr>
                                    <tr>
										<span>C</span>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<span>C</span><br>
									</tr>
                                    <tr>
										<span>D</span>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<input class="empty" type="checkbox" name="seating" value="empty">
										<input class="booked" type="checkbox" name="seating" value="booked" disabled>
										<span>D</span><br>
									</tr>
                                </table>
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
                        				<td>A Star is Born</td>
                        				<td>5$</td>
                        				<td>2</td>
                        				<td>20$</td>
                        			</tr>
                        			<tr>
                        			    <td colspan="3">Total</td>
                        			    <td>20$</td>
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