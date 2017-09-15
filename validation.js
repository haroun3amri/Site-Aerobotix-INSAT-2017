function ValidateEmail(inputText)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(inputText.value.match(mailformat))  
{  
document.formulaire.email.focus();  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
document.formulaire.email.focus();  
return false;  
}  
}


function valider ( )
{
    

	
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if  (( ! document.formulaire.email.value.match(mailformat) ) ||(document.formulaire.email.value == "" ) )
		{  
alert("You have entered an invalid email address!");  
document.formulaire.email.focus();  
valid = false;
return valid;  
        }  

	
	 
	
   if (grecaptcha.getResponse() == ""){
    alert("Validez le Captcha!");
	valid = false;
	return valid;
} 
   
}