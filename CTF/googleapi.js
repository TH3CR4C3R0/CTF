var username = document.getElementById('username'); 
var password = document.getElementById('password');
function valid(){
	if(username.value == 'administrator' && password.value=='P@S5!W0rd#625'){
		document.getElementById('flag').innerHTML = 'CTF{J@vAsCR1pT_Pr0}';
	}else{
		document.getElementById('flag').innerHTML = 'Try Harder!';
	}
}