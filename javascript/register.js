
function validateRegister(){

    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var password = document.getElementById("password");


    var fname_value = fname.value;
    var lname_value = lname.value;
    var email_value = email.value;
    var password_value = password.value;

    if(emptyInputs(fname_value, lname_value, email_value, password_value) === false){
        return false;
    }
    
    if(validateName(fname_value) === true)
        error(fname, "");

    if(validateName(fname_value) === false){
        error(fname, "First name should be at least 2 letters long!");
        return false;
    }
    
    if(validateName(lname_value) === true)
        error(lname, "");

    if(validateName(lname_value) === false){
        error(lname, "Last name should be at least 2 letters long!");
        return false;
    }
    
    if(validateEmail(email_value) === true) 
        error(email, "");
    
    if(validateEmail(email_value) === false){
        error(email, "Email is not valid!");
        return false;
    }

    if(validatePassword(password_value) === true)
        error(password, "");
    
    if(validatePassword(password_value) === false){
        error(password, "Password should have at least one capitalized letter, number and symbol!");
        return false;
    }
}

function emptyInputs(first, last, em, pass){
    if(first === ""){
        error(fname, "First name can't be blank!");
        return false;
    }
    if(first !== ""){
        error(fname, "");
    }

    if(last === ""){
        error(lname, "Last name can't be blank!");
        return false;
    }
    if(last !== ""){
        error(lname, "");
    }

    if(em === ""){
        error(email, "Email can't be blank!");
        return false;
    }
    if(em !== ""){
        error(email, "");
    }

    if(pass === ""){
        error(password, "Password cannot be blank!");
        return false;
    }
    if(pass !== ""){
        error(password, "");
    }
}


function validateName(name){
    const regex = /[a-zA-Z]{2,}/;
    return regex.test(name);
}

function validateEmail(email){
    const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return regex.test(email);
}

function validatePassword(password){
    const regex = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
    return regex.test(password);
}


function error(element, message){
    const form_element = element.parentElement;
    const p = form_element.querySelector("span");
    p.innerHTML = message;
}

    
    
        
    
    
    
    