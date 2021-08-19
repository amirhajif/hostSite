function change(id){
    if (id=="email"){
        let email=document.getElementById(id).value;
        if (email.includes("@"))
        {
            let emailField=document.getElementById(id);
            emailField.classList.remove('is-invalid');
            emailField.classList.add('is-valid');
        }
        else
        {
            let emailField=document.getElementById(id);
            emailField.classList.add('is-invalid');
        }
    }
    else if (id=="phoneNumber") {
        let number=document.getElementById(id).value;
        if (number.length == 11 && number.charAt(0)=="0")
        {
            let numberField=document.getElementById(id);
            numberField.classList.remove('is-invalid');
            numberField.classList.add('is-valid');
        }
        else
        {
            let numberField=document.getElementById(id);
            numberField.classList.add('is-invalid');
        }
    }
    else if(id=="password"){
        let password=document.getElementById(id).value;
        if(password.length >= 8)
        {
            let passField=document.getElementById(id);
            passField.classList.remove('is-invalid');
            passField.classList.add('is-valid');
        }
        else
        {
            let passField=document.getElementById(id);
            passField.classList.add('is-invalid');
        }
    }
    else if(id=="passwordVerify") {
        let passwordVerify=document.getElementById(id).value;
        let password=document.getElementById("password").value;
        if (passwordVerify == password)
        {
            let passwordVerifyField=document.getElementById(id);
            passwordVerifyField.classList.remove('is-invalid');
            passwordVerifyField.classList.add('is-valid');
        }
        else {
            let passwordVerifyField=document.getElementById(id);
            passwordVerifyField.classList.add('is-invalid');
        }
    }
}
function signup(){
    let email=document.getElementById("email").value;
    if (!(email.includes("@")))
    {
        alert("ایمیل شما اشتباه است");
        return false;
    }
    let number=document.getElementById("phoneNumber").value;
    if (number.length != 11 || number.charAt(0)!="0")
    {
        alert("شماره شما معتبر نیست");
        return false;
    }
    let password=document.getElementById("password").value;
    if (password.length < 8 )
    {
        alert("فیلد رمزعبور حداقل شامل 8 کاراکتر باشد");
        return false;
    }
    let passwordVerify=document.getElementById("passwordVerify").value;
    if (password!==passwordVerify) {
        alert("لطفا فیلد های مربوط به رمزعبور را چک کنید");
        return false;
    }

}