
let email = document.querySelector('#email')
let labelEmail = document.querySelector('#labelEmail')
let validEmail = false;
const TrEmail = document.querySelector('.TrEmail');
email.addEventListener('keyup', () => {
    if (document.forms[0].email.value == ""
        || document.forms[0].email.value.indexOf('@') == -1
        || document.forms[0].email.value.indexOf('.') == -1 || document.forms[0].email.value.length == 0) {return false;}else {return true;}})




