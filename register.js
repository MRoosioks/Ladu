var min_length = 6;
function validate(){
	document.getElementById("message-password").innerHTML = "";
	document.getElementById("message-username").innerHTML = "";
	if(username()){
	}
	if(password()){
	}

	if(username() == false || password() == false){
		return false;
	}
	return username() && password();
}
function username(){
	var username = document.form.kasutajanimi.value;
	var usernameCol = document.getElementById("kasutajanimi");
	
	if(username.match(" ")){
		document.getElementById("message-username").innerHTML = "<img src='Red_X.png'>" + "Kasutajanimi ei tohi sisaldada tühikuid!";
		return false;
	}
	else if(username.length ==""){
		document.getElementById("message-username").innerHTML = "<img src='Red_X.png'>" +"Kasutajanime väli on täitmata!";
		return false;
	}
	else if(username.length < min_length){
		document.getElementById("message-username").innerHTML = "<img src='Red_X.png'>" +"Kasutajanimi peab sisaldama vähemalt " + min_length + " tähemärki!";
		return false;
	}
	else{
		return true;
	}
}
function password(){
	var password1 = document.form.parool.value;
	var password2 = document.form.parooluuesti.value;
	
	if(password1.match(" ") || password2.match(" ")){
		document.getElementById("message-password").innerHTML = "<img src='Red_X.png'>" + "Parool ei tohi sisaldada tühikuid!";
		return false;
	}
	else if(password1.length =="" && password2.length ==""){
		document.getElementById("message-password").innerHTML = "<img src='Red_X.png'>" + "Parooli väljad on täitmata!";
		return false;
	}
	else if(password1.length =="" || password2.length ==""){
		document.getElementById("message-password").innerHTML = "<img src='Red_X.png'>" + "Parooli väli on täitmata!";
		return false;
	}
	else if(password1.length < min_length || password2.length < min_length){
		document.getElementById("message-password").innerHTML = "<img src='Red_X.png'>" + "Parool peab sisaldama vähemalt " + min_length + " tähemärki!";
		return false;
	}
	else if(password1 != password2){
		document.getElementById("message-password").innerHTML = "<img src='Red_X.png'>" + "Paroolid ei ole samad!";
		return false;
	}
	else{
		return true;			
	}
}