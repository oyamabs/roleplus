let submitButton = document.querySelector(".button");

submitButton.addEventListener("click", (e) => {
    let usernameInput = document.querySelector("#username").value;
    let passwordInput = document.querySelector("#password").value;
    let passwordConfirmInput = document.querySelector("#password-confirm").value;

    if (usernameInput == undefined || passwordInput === passwordConfirmInput) {
        alert("The passwords doesn't match !");
        e.preventDefault();
    }
});