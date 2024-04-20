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

/*Script pour afficher tout les utilisateur*/
document.addEventListener("DOMContentLoaded", function() {
    const usersLink = document.getElementById("users-link");
    const modalUsers = document.getElementById("users-modal");
    const closeUsers = modalUsers.querySelector(".close");

    usersLink.addEventListener("click", function() {
        modalUsers.style.display = "block";
    });

    closeUsers.addEventListener("click", function() {
        modalUsers.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modalUsers) {
            modalUsers.style.display = "none";
        }
    });
});


/*Script pour afficher tout les activité*/
document.addEventListener("DOMContentLoaded", function() {
    const activityLink = document.getElementById("activity-link");
    const modalActivity = document.getElementById("activity-modal");
    const closeActivity = modalActivity.querySelector(".close");

    activityLink.addEventListener("click", function() {
        modalActivity.style.display = "block";
    });

    closeActivity.addEventListener("click", function() {
        modalActivity.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modalActivity) {
            modalActivity.style.display = "none";
        }
    });
});

/* Script pour afficher le dashboard*/


/*Script pour afficher parametre*/
document.addEventListener("DOMContentLoaded", function() {
    const settingsLink = document.getElementById("settings-link");
    const modalSettings = document.getElementById("settings-modal");
    const closeSettings = modalSettings.querySelector(".close");

    settingsLink.addEventListener("click", function() {
        modalSettings.style.display = "block";
    });

    closeSettings.addEventListener("click", function() {
        modalSettings.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modalSettings) {
            modalSettings.style.display = "none";
        }
    });
});

/* Script pour afficher le dashboard*/
document.addEventListener("DOMContentLoaded", function() {
    const settingsLink = document.getElementById("dashboard-link");
    const modalSettings = document.getElementById("dashboard-modal");
    const closeSettings = modalSettings.querySelector(".close");

    settingsLink.addEventListener("click", function() {
        modalSettings.style.display = "block";
    });

    closeSettings.addEventListener("click", function() {
        modalSettings.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modalSettings) {
            modalSettings.style.display = "none";
        }
    });
});


