function ValidateEmailandNumandName(inputText, inputNum, inputName) {
    var fullName = /^[a-zA-Z]+$/
    if (inputName.value == "") {
        alert("Please fill a name");
    } else if (inputName.value.match(fullName)) {
        alert("Valid name!"); document.form1.fullName.focus();
    } else {
        alert("You have entered an invalid name!");
        document.form1.fullName.focus();
    }
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (inputText.value == "") {
        alert("Please fill an email");
    } else if (inputText.value.match(mailformat)) {
        alert("Valid email address!"); document.form1.text1.focus();
    } else {
        alert("You have entered an invalid email address!");
        document.form1.text1.focus();
    } var numFormat = /[0-9]{10}/
    if (inputNum.value.match(numFormat)) {
        alert("Valid phone number!");
        document.form1.phoneNo.focus();
        return true;
    }
    else { 
        alert("Input 10 digits only for phone number"); 
        document.form1.phoneNo.focus(); 
        return false; 
    } }