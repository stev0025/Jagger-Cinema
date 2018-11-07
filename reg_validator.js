function validateForm() {

	var j_name = document.getElementById("name");
	var j_email = document.getElementById("email");
	var j_pass1 = document.getElementById("password");
	var j_pass2 = document.getElementById("password2");
	
	//email start here
	
	var pos = j_email.value.search(/^[A-Z0-9\.\-]+\@[A-Z]+\.[A-Z]+(\.[A-Z]+){0,2}$/i);
	var end = j_email.value.search(/\.[A-Z]{2,3}$/i);

	if (pos == -1 || end == -1) {
		alert("The email field contains a user name part follows by “@” and a " +
			"domain name part. The user name contains word characters " +
			"including hyphen (“-”) and period (“.”). The domain name contains " +
			"two to four address extensions. Each extension is string of word " +
			"characters and separated from the others by a period (“.”). The last " +
			"extension must have two to three characters.");
		j_email.focus();
		return false;
	}
	
	//name start here
	
	/* The name field contains alphabet characters 
	and character spaces.
		So, 
		I assume 'Jack Lee' is valid
		I assume 'Jack Lee 12' is invalid
		'Jack Lee_' is invalid
		Only can use alphabet & spaces
		'Jack   			Lee' is invalid
		' Jack Lee' is invalid
	*/
	var pos = j_name.value.search(/^[a-z]+( [a-z]+){0,10}$/i);
	
	if (pos == -1) {
		alert("The name field must contains alphabet characters and spaces only.");
		//j_name.focus();
		j_name.focus();
		return false;
	}
	
	if (j_pass1 != j_pass2) {
		alert("password and confirmation password are not the same.");
		return false;
	}
	
	return true;
}