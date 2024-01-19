function changeLogin() {
    var changeLogin = document.getElementById("change-login-div");
    var currentLoginStyle = window.getComputedStyle(changeLogin).display;

    if (currentLoginStyle == 'none') {
        changeLogin.style.display = "flex";
    } else {
        changeLogin.style.display = "none";
    }
}
function changePassword(){
    var changePassword = document.getElementById("change-password-div");
    var currentPasswordStyle = window.getComputedStyle(changePassword).display;

    if (currentPasswordStyle == 'none') {
        changePassword.style.display = "flex";
    } else {
        changePassword.style.display = "none";
    }
}