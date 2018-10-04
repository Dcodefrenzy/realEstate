window.addEventListener('load', function(){
	console.log("here");
});



var form = document.forms.myForm
form.addEventListener('submit', displayform, false);

function displayform(event){
	event.preventDefault();
	var user = {};

	user.name = form.firstname.value;
	user.fname = form.lastname.value;
	user.form = form.email.value;
	user.phone = form.phonenumber.value;
	user.pword = form.pword.value;
	user.c = form.cpworld.value;
	alert(JSON.stringify(user));

}