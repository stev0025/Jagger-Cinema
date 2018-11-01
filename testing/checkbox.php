<?php
	$s0 = 1;
	$s1 = 0;
	$s2 = 1;
	$s3 = 1;
	$s4 = 1;
	
	$array = array($s0,$s1,$s2,$s3,$s4);

?>

<!DOCTYPE html>
<html lang="en">

    <head>
		<style>
			body {
				position: absolute;
				top: 50%;
				width: 100%;
				text-align: center;
			}
			
			input {
				-webkit-appearance: none;
				cursor: pointer;
				height: 25px;
				width: 25px;
				border-radius: 5px;
			}
			
			.empty {
				background-color: #0000cd;
			}
			
			.empty:hover {
				background-color: #4169e1;
			}

			.empty:checked {
				background-color: #8470ff;
			}
			
			.booked {
				background-color: #800080;
			}
			
			.booked:hover {
				cursor: context-menu;
			}

		</style>
		
		<script type="text/javascript" src="seat_calculation.js"></script>
	</head>
	<body>

		<?php
			$arrlength = count($array);

			for($x = 0; $x < $arrlength; $x++) {
				
				if ($array[$x] == 1) {
					echo '<input class="empty" type="checkbox" name="seating" value="empty">';
				}
				else {
					echo '<input class="booked" type="checkbox" name="seating" value="booked" disabled>';
				}
			}
		
		?>

		<span id="total"></span>
		
	<body>