function validateForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    // Basic form validation
    if (username === "" || password === "" || confirmPassword === "") {
        alert("All fields must be filled out");
        return false;
    }

    // Password matching validation
    if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
    }

    return true;
}
