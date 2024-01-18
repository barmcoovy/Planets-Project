function changeLogin() {
    var changeLogin = document.getElementById("change-login-div");
    var currentLoginStyle = window.getComputedStyle(changeLogin).display;

    if (currentLoginStyle == 'none') {
        changeLogin.style.display = "flex";
    } else {
        changeLogin.style.display = "none";
    }
}
