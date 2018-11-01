
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

	document.getElementById("total").innerHTML = "your selected number of seat is : " + quan;
	
}

function calculatePrice() {

	calculateSeat();

}


setInterval(calculatePrice, 50);
