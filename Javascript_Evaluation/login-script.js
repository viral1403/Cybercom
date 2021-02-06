var admin_login = [];

var user_login = [];

function login(){
	var userId = document.getElementsByName("email").value;
	var passId = document.getElementByName("password").value;

	//localstorage
	admin_login = localstorage.getItem("AdminData");

	user_login = localStorage.getItem();
}




