document.addEventListener('DOMContentLoaded', () => {
    // Login form validation
    document.getElementById('loginForm').addEventListener('submit', function (event) {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var usernamePattern = /^[a-zA-Z0-9]{6,15}$/;
        var passwordPattern = /^.{8,16}$/;

        if (!usernamePattern.test(username) || !passwordPattern.test(password)) {
            alert('Invalid username or password');
            event.preventDefault();
        }
    });

    // Registration form validation
    document.getElementById('registrationForm').addEventListener('submit', function (event) {
        var teamName = document.getElementById('teamName').value;
        var phonePattern = /^[0-9]{7,14}$/;

        if (!teamName || !phonePattern.test(document.getElementById('captainPhone').value) ||
            !phonePattern.test(document.getElementById('memberPhone').value)) {
            alert('Please fill out the form correctly.');
            event.preventDefault();
        }
    });
});
