document.getElementById('privacy_acceptance').addEventListener('change', function() {
    var registerButton = document.getElementById('register-button');
    if (this.checked) {
        registerButton.classList.remove('disabled');
    } else {
        registerButton.classList.add('disabled');
    }
});