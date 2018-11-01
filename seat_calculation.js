
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

	document.getElementById("ticket_quantity").innerHTML = "<h1>"+quan;
	document.getElementById("total_amount").innerHTML = "<h1>"+"$"+quan*12+".00";
	
}

function calculatePrice() {

	calculateSeat();

}


setInterval(calculatePrice, 50);
