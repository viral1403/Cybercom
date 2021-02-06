


document.querySelector("#registerAdmin").addEventListener('click', ()=>{
	let check = document.querySelector("#terms:checked");
	let adminRegistered = false;
	let tempname ="";
	let tempemail="";
	let temppassword="";
	let tempRepassword ="";
	let tempstate = "";
	let tempcity = "";

	let admin= new Array();

	let AdminPerson = {
		name: "",
		email: "",
		password : "",
		city : "",
		state: ""
	};
	

	if(check != null){

		tempname = document.querySelector("#adminName").value;
		tempemail = document.querySelector("#adminEmail").value;
		temppassword = document.querySelector("#adminPassword").value;
		tempRepassword = document.querySelector("#adminRepassword").value;;

		tempstate = document.querySelector("#State").value;
		tempcity = document.querySelector("#City").value;

		if(admin != null){
			for(let i =0;i<admin.length;i++){
				if(admin.name == tempname){
					if(admin.email == temp_email){
						adminRegistered = true;
					}
				}
			}
		}
		if(adminRegistered == false){
			if(temppassword == tempRepassword){
				AdminPerson.name = tempname;
				AdminPerson.email = tempemail;
				AdminPerson.password = temppassword;
				AdminPerson.city = tempcity;
				AdminPerson.state = tempstate;
			};
			console.log(AdminPerson);
			
			}
			else{
				alert("Password does not match");
			}
	}	

	else{
		alert("Terms and Conditions not accepted");
	}
	admin.push(AdminPerson);
	localStorage.setItem("AdminData",admin);
});
