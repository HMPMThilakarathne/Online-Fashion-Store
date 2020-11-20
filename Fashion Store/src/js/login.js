


function enableButton(){

	var x = 0;
	var y = 0;
	
	var x = document.getElementById("pwd").value;
	var y = document.getElementById("eml").value;
	if(x == '' || y == '')
			{
				alert("Sorry,can not submit");
				return false;
			}
	
	else{
		alert("Log in sucessful");
		return true;
		}
	}
