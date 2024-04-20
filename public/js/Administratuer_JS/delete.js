// Script pour l'affichage de la liste des utilisateurs a suprimer

document.addEventListener("DOMContentLoaded", function() {
    const deleteUserBtn = document.querySelector(".notification.add-reminder");

    // Ciblez la fenêtre modale et le bouton de fermeture
    const modal = document.getElementById("delete-user-modal");
    const closeBtn = document.querySelector(".modal .close");

    // Ajoutez un gestionnaire d'événements pour afficher la fenêtre modale lorsque le bouton est cliqué
    deleteUserBtn.addEventListener("click", function() {
        modal.style.display = "block";
    });

    // Ajoutez un gestionnaire d'événements pour fermer la fenêtre modale lorsque le bouton de fermeture est cliqué
    closeBtn.addEventListener("click", function() {
        modal.style.display = "none";
    });

    // Ajoutez un gestionnaire d'événements pour fermer la fenêtre modale lorsque l'utilisateur clique en dehors de la fenêtre modale
    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});

// Script pour l'affichage de la liste des nounous a suprimer


document.addEventListener("DOMContentLoaded", function() {
    const deleteNounouBtn = document.querySelector(".notification.delete-nounou");

    // Ciblez la fenêtre modale et le bouton de fermeture
    const modal = document.getElementById("delete-nounou-modal");
    const closeBtn = document.querySelector(".modal-nounou .close");

    // Ajoutez un gestionnaire d'événements pour afficher la fenêtre modale lorsque le bouton est cliqué
    deleteNounouBtn.addEventListener("click", function() {
        modal.style.display = "block";
    });

    // Ajoutez un gestionnaire d'événements pour fermer la fenêtre modale lorsque le bouton de fermeture est cliqué
    closeBtn.addEventListener("click", function() {
        modal.style.display = "none";
    });

    // Ajoutez un gestionnaire d'événements pour fermer la fenêtre modale lorsque l'utilisateur clique en dehors de la fenêtre modale
    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});



document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll("aside .sidebar a");

    links.forEach(function(link) {
        link.addEventListener("click", function(event) {
            links.forEach(function(otherLink) {
                otherLink.classList.remove("active");
            });
            this.classList.add("active");
        });
    });
});
