const form = document.getElementById('form');
const namee = document.getElementById('name');
const surname = document.getElementById('surname');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');


document.addEventListener('DOMContentLoaded',function(ngjarja){
    const button = document.getElementById('signUpButton');
    const validate = (ngjarja) =>{
        ngjarja.preventDefault();
        checkInput();
        return true;
    }
    button.addEventListener('click',validate);

});


function checkInput(){
    const nameValue = namee.value.trim();
    const surnameValue = surname.value.trim();
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(nameValue === ''){
       setError(namee,"Emri nuk mund te jete i zbrazet");
       
    }else if(!isName (nameValue)){
        setError(namee,"Emri nuk ploteson kushtet");
        
    }
    else{
        setSuccess(namee);
    }
    if(surnameValue === ''){
        setError(surname, "Mbiemri nuk mund te jete i zbrazet");
       
    } else if(!isSurname(surnameValue)){
        setError(surname, "Mbiemri nuk ploteson kushtet");
        
    }
    else{
        setSuccess(surname);
    } 
    if(usernameValue === ''){
        setError(username, "Username nuk mund te jete i zbrazet");
        
    } else if(!isUsername(usernameValue)){
        setError(username, "Username nuk ploteson kushtet");
        
    }
    
    else{
        setSuccess(username);
    }
    if(emailValue === ''){
        setError(email, "Email-i nuk mund te jete i zbrazet");
        
    }else if(!isEmail(emailValue)){
        setError(email, "Email-i nuk plotesone kushtet");
        
    }
    else{
        setSuccess(email);
    }
    if(passwordValue === ''){
        setError(password, "Passwordi nuk mund te jete i zbrazet");
        
    } else if(!isPassword(passwordValue)){
        setError(password, "Passwordi nuk ploteson kushtet");
        
    }
    else{
        setSuccess(password);
    }
    if(password2Value === ''){
        setError(password2, "Passwordi nuk mund te jete i zbrazet");
    
    } else if(passwordValue !== password2Value){
        setError(password2, "Passwordet nuk perputhen");
    
    }
    else{
        setSuccess(password2);
    }

    
}

function setError(input,message){
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");

    small.innerText = message;

    formControl.className = "form-control error";
}
function setSuccess(input){
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
    return true;
}

function isName(namee){
    return /^[A-Z][a-z]{2,15}/.test(namee);
}
function isSurname(surname){
    return /^[A-Z][a-z]{2,15}/.test(surname);
}
function isUsername(username){
    return /^\w+[_.]?\w{2,10}/.test(username);
}
function isEmail(email){
    return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    }
function isPassword(password){
    return /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/.test(password);
}
    
