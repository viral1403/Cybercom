var admin=[];
var adminRegistered = false;
var AdminPerson = {
	name: tempname,
	email: tempemail,
	password : temppassword,
	city : tempcity,
	state: tempstate
};
document.querySelector("#registerAdmin").addEventListener('click', function(){
	var check = document.getElementByName("terms");
	if(check.checked){

		var tempname = document.getElementByName("adminName").value;
		var tempemail = document.getElementByName("adminEmail").value;
		var temppassword = document.getElementByName("adminPassword").value;
		var tempRepassword = document.getElementByName("adminRepassword").value;;

		var tempstate = document.getElementByName("State").value;
		var tempcity = document.getElementByName("City").value;
		if(!empty(admin)){
			for(var i =0;i<admin.length;i++){
				if(admin.name === tempname){
					if(admin.email === temp_email){
						adminRegistered = true;
					}
				}
			}
		}
		if(adminRegistered == false){
			if(temppassword === tempRepassword){
				AdminPerson.name = tempname;
				AdminPerson.email = tempemail;
				AdminPerson.password = temppassword;
				AdminPerson.city = tempcity;
				AdminPerson.state = tempstate;
			};
			admin.push(AdminPerson);

				localStorage.setItem("AdminData",admin);
			}
			else{
				alert("Password does not match");
			}
		}		
	}
	else{
		alert("Terms and Conditions not accepted");
	}
});
