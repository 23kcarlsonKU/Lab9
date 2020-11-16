function validate(){
	var emailRegex = /\S+@\S+\.\S+/;
      
return !(!emailRegex.test(document.forms[0]["name"].value)||
		document.forms[0]["password"].value			== "" ||
		document.forms[0]["small"].value    		== "" ||
		document.forms[0]["small"].value    		<  0  ||
		document.forms[0]["med"].value      		== "" ||
		document.forms[0]["med"].value      		<  0  ||
		document.forms[0]["large"].value    		== "" ||
		document.forms[0]["large"].value    		<  0  ||
		document.forms[0]["shipping"].value 		== "")
}