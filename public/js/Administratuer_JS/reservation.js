document.addEventListener("DOMContentLoaded", function() {
    const reservationLink = document.querySelector(".sidebar a[href='#']");
    const reservationPopup = document.getElementById("reservation-popup");
    const closePopupBtn = document.querySelector(".popup .close");

    // Afficher la popup lorsque l'utilisateur clique sur "Réservations"
    reservationLink.addEventListener("click", function() {
        reservationPopup.style.display = "block";
    });

    // Masquer la popup lorsque l'utilisateur clique sur le bouton de fermeture
    closePopupBtn.addEventListener("click", function() {
        reservationPopup.style.display = "none";
    });
});
