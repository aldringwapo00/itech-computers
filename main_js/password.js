document.querySelectorAll(".showPassword").forEach(function(button) {
    button.addEventListener("click", function() {
        const passwordInputs = document.querySelectorAll(".passwordInputFirst");
        passwordInputs.forEach(function(input) {
            input.type = "text";
        });
        this.style.display = "none";
        document.querySelector(".hidePassword").style.display = "block";
    });
});

document.querySelectorAll(".hidePassword").forEach(function(button) {
    button.addEventListener("click", function() {
        const passwordInputs = document.querySelectorAll(".passwordInput");
        passwordInputs.forEach(function(input) {
            input.type = "password";
        });
        this.style.display = "none";
        document.querySelector(".showPassword").style.display = "block";
    });
});
