function validate(){
	var d;
	
	var x=document.forms["createaccount"]["usrnm"].value;  
    if(x==null || x=="" )
    {
        alert("Username can't be left blank");
		document.getElementById("usrnm").focus(); //highlight Title text field
		document.getElementById("usrnm").style.backgroundColor = "#CC3333";
        return false;
    }
	else{
		document.getElementById("usrnm").style.backgroundColor = "white";
	}

    x=document.forms["createaccount"]["pw"].value;
    if(x==null || x=="")
    {
        alert("Password is mandatory");
		document.getElementById("pw").focus(); //highlight Title text field
		document.getElementById("pw").style.backgroundColor = "#CC3333";
        return false;
    }
    else
    {
		document.getElementById("pw").style.backgroundColor = "white";
    }
	
	x=document.forms["createaccount"]["email"].value;  
    if(x==null || x=="" )
    {
        alert("Email can't be left blank");
		document.getElementById("email").focus(); //highlight Title text field
		document.getElementById("email").style.backgroundColor = "#CC3333";
        return false;
    }
	else{
		document.getElementById("email").style.backgroundColor = "white";
	}
	
	x=document.forms["createaccount"]["dob"].value;  
    if(x==null || x=="" )
    {
        alert("You must enter a date");
		document.getElementById("dob").focus(); //highlight Title text field
		document.getElementById("dob").style.backgroundColor = "#CC3333";
        return false;
    }
	else{
		document.getElementById("dob").style.backgroundColor = "white";
	}
	
	x=document.forms["createaccount"]["dob"].value;  
    if(x==null || x=="" )
    {
        alert("You must enter an age");
		document.getElementById("age").focus(); //highlight Title text field
		document.getElementById("age").style.backgroundColor = "#CC3333";
        return false;
    }
	else{
		document.getElementById("age").style.backgroundColor = "white";
	}
	
	x=document.forms["createaccount"]["notif"];
	var chkd = false;
	for(var i = 0; i < x.length; i++){
		if (x[i].checked){
			chkd = true;
			break;
		}
	}
	if(chkd == false){
		alert("Must choose an option for receiving notifications!");
		return false;
	}
	/*if (!x.checked){
		alert("Must choose an option for receiving notifications!");
		return false;
	}*/
	
	x=document.forms["createaccount"]["gtype"];
	
	chkd = false;
	for(var i = 0; i < x.length; i++){
		if (x[i].checked){
			chkd = true;
			break;
		}
	}
	if(chkd == false){
		alert("Must choose an option for gender!");
		return false;
	}
	/*if (!x.checked){
		alert("Must choose an option for gender!");
		return false;
	}*/
	
	
	d  = new Date();
	return confirm('Do you really want to submit the form on ' + d.toString() + '?');
}//end validate*/


