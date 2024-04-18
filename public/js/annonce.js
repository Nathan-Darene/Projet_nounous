// document.addEventListener("DOMContentLoaded", function () {
//     const annonceLink = document.querySelector('.a[href="#annonce"]');
//     const annonceDiv = document.getElementById("annonce");

//     annonceLink.addEventListener("click", function (event) {
//         event.preventDefault();
//         annonceDiv.style.display = "flex";
//     });
// });

// document.addEventListener("DOMContentLoaded", function() {
//     const serviceLink = document.querySelector('.a[href="#service"]');
//     const serviceDiv = document.getElementById('service');

//     serviceLink.addEventListener('click', function(event) {
//         event.preventDefault();
//         serviceDiv.style.display = 'block';
//     });
// });

document.addEventListener("DOMContentLoaded", function() {
    const annonceLink = document.querySelector('.a[href="#annonce"]');
    const annonceDiv = document.getElementById("annonce");
    const serviceLink = document.querySelector('.a[href="#service"]');
    const serviceDiv = document.getElementById('service');

    // Fonction pour afficher ou masquer un élément
    function toggleElement(element) {
        if (element.style.display === "none" || element.style.display === "") {
            element.style.display = "block"; // ou "flex" si c'est le cas pour l'annonceDiv
        } else {
            element.style.display = "none";
        }
    }

    annonceLink.addEventListener("click", function (event) {
        event.preventDefault();
        toggleElement(annonceDiv);
    });

    serviceLink.addEventListener('click', function(event) {
        event.preventDefault();
        toggleElement(serviceDiv);
    });
});
