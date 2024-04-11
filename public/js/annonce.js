document.addEventListener("DOMContentLoaded", function () {
    const annonceLink = document.querySelector('.a[href="#annonce"]');
    const annonceDiv = document.getElementById("annonce");

    annonceLink.addEventListener("click", function (event) {
        event.preventDefault();
        annonceDiv.style.display = "flex";
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const serviceLink = document.querySelector('.a[href="#service"]');
    const serviceDiv = document.getElementById('service');

    serviceLink.addEventListener('click', function(event) {
        event.preventDefault();
        serviceDiv.style.display = 'block';
    });
});

