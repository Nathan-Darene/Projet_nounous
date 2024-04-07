document.addEventListener('DOMContentLoaded', function() {
    // Sélectionnez tous les éléments avec la classe "choix"
    const choices = document.querySelectorAll('.choix');

    // Fonction pour masquer toutes les sections sauf une
    function hideSections(exceptSectionId) {
        const sectionsToHide = ['dashboardSection', 'notificationSection', 'agendaSection', 'coinSection', 'messagingSection', 'helpSection', 'settingSection'];
        sectionsToHide.forEach(sectionId => {
            if (sectionId !== exceptSectionId) {
                const section = document.getElementById(sectionId);
                if (section) {
                    section.style.display = 'none';
                }
            }
        });
    }

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
                // Masquer toutes les sections sauf celle cliquée
                hideSections(targetId);

                // Affichez l'élément cible
                targetElement.style.display = 'block';
            }
        });
    });
});
