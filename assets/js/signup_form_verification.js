function validateSignUp() {

    let passwordInput = document.querySelector("[name='password']").value;
    let confirmPasswordInput = document.querySelector("[name='password-confirm']").value;
    if (passwordInput != confirmPasswordInput) {
        alert("Passwords MUST be the same !");
        console.log(`${passwordInput}:${confirmPasswordInput}`)
        return false;
    }
    return true;
}