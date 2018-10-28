<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Registration - Jagger Cinema</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design_2.css">
    
    </head>

	<body>
		<div id="wrapper">
			<div id="header">
				<div id="header_section">
					<div id="logo">
						<img id="logo_pict">

					</div>

					<div id="login_reg">
						<input class="btn_reg" type="button" value="register">
						<input class="btn_log" type="button" value="login">

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
				<img style="width:100px; margin-left:100px;" id="logo_pict">			
				<form action="register.php" method="POST">
					<table id="login_content_table">
					    <tr><td>
					<fieldset id="login_content_fieldset"><legend style="background-color: white">Login Info</legend>
					<label>E-mail:
					<input type="text" name="email" size="30"></label> <br><br>
					<label>Password:
					<input type="password" name="password"></label> <br><br>
					<label>Password confirmation:
					<input type="password" name="password2"></label>
					</fieldset>
					<br><br>
					
					<fieldset id="login_content_fieldset"><legend style="background-color: white">Personal Info</legend>
					<label>Name:
					<input type="text" name="name" size="30"></label> <br><br>
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
					
					</td></tr>
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