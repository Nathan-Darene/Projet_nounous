document.addEventListener('DOMContentLoaded', function() {
    // Sélectionnez tous les éléments avec la classe "choix"
    const choices = document.querySelectorAll('.choix');

    // Boucle à travers chaque élément avec la classe "choix"
    choices.forEach(choice => {
        // Écoutez l'événement de clic pour chaque élément
        choice.addEventListener('click', function() {
            // Récupérez l'ID de l'élément cliqué
            const targetId = this.getAttribute('data-target');

            // Sélectionnez l'élément cible en fonction de son ID
            const targetElement = document.getElementById(targetId);

            // Vérifiez si l'élément cible existe
            if (targetElement) {
                // Récupérez tous les éléments avec la classe "affiche" et masquez-les sauf celui qui a été sélectionné
                const afficheElements = document.querySelectorAll('.affiche');
                afficheElements.forEach(element => {
                    // Masquez l'élément s'il ne correspond pas à l'élément cible
                    if (element !== targetElement) {
                        element.style.display = 'none';
                    }
                });

                // Affichez l'élément cible
                targetElement.style.display = 'block';
            }
        });
    });
});
