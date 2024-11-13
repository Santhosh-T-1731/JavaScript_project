// function work(){
//     document.getElementsByClassName('form').$(selector).submit(function (e) {
//         e.preventDefault();

//     });
// }
// work().document.getElementsByClassName('form').innerHTML= form;
// let value = work();
// document.getElementsByClassName('form').innerHtml= value;


// function all_detail(){
//     alert(document.getElementById('name').value);
// }

function validateForm(){
    let name = document.forms['form']['name'].value;
    let email = document.forms['form']['email'].value;
    let contact = document.forms['form']['contact'].value;
    let message = document.forms['form']['message'].value;

    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    // const isValid = emailPattern.test(email);
    if(name==""){
        document.getElementById('name-error').classList.remove('error_alert');
    }
    else{
        document.getElementById('name-error').classList.add('error_alert');
    }
    if(email==""){
        document.getElementById('email-error').classList.remove('error_alert');
    }
    else if(!emailPattern.test(email)){
        document.getElementById('email-valid-error').classList.remove('error_alert');
    }
    else{
        document.getElementById('email-valid-error').classList.add('error_alert');
        document.getElementById('email-error').classList.add('error_alert');
    }
    if(contact==""){
        document.getElementById('contact-error').classList.remove('error_alert');
    }
    else{
        document.getElementById('contact-error').classList.add('error_alert');
    }
    if (message=="") {
        document.getElementById("message-error").classList.remove("error_alert");
    }
    else{
        document.getElementById("message-error").classList.add("error_alert");
    }

    if(name!="" && email!="" && contact!="" && message!=""){
        document.getElementById("contactForm").submit();
    }
    else{
        alert('Please enter all the fields');
    }

}

