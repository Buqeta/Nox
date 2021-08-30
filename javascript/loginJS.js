

// document.getElementById("loginForm").addEventListener('submit', (event) =>{
function validate(){
    var bool = "";

    // event.preventDefault();

    const email = document.getElementById("email");
    const password = document.getElementById("password");

    const email_value = email.value;
    const pass_value = password.value;

    console.log(email_value);
    console.log(pass_value);

    if(email_value === ""){
        error(email, "Email cannot be blank!");
        return false;
        // bool = "invalid email";
        // console.log(bool);
    }
    else{
        error(email, "");
        // bool = "good email";
        // console.log(bool);
    }

    if(pass_value === ""){
        error(password, "Password cannot be blank!");
        return false;
        // bool = "invalid pass";
        // console.log(bool);
    }
    else{
        error(password, "");
        // bool = "good pass";
        // console.log(bool);
    }

    

    if(email_value !== "" && pass_value !== ""){
        error(email, "");
        return true;
        // bool = "mire eshte krejt";
        // console.log(bool);
    }
}


function error(element, message){
    const form_element = element.parentElement;
    const p = form_element.querySelector("span");
    p.innerHTML = message;
}
    
// });


    



