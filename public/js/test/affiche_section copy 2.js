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
                // Récupérez tous les éléments avec la classe "affiche" et masquez-les
                const afficheElements = document.querySelectorAll('.affiche');
                afficheElements.forEach(element => {
                    element.style.display = 'none';
                });

                // Si la section est "Dashboard", masquez également les autres  sections
                if (targetId === 'dashboardSection') {
                    const agendaSection = document.getElementById('agendaSection');
                    if (agendaSection) {
                        agendaSection.style.display = 'none';
                    }
                    const notificationSection = document.getElementById('notificationSection');
                    if (notificationSection) {
                        notificationSection.style.display = 'none';
                    }
                    const coinSection = document.getElementById('coinSection');
                    if (coinSection) {
                        coinSection.style.display = 'none';
                    }
                    const messagingSection = document.getElementById('messagingSection');
                    if (messagingSection) {
                        messagingSection.style.display = 'none';
                    }
                    const helpSection = document.getElementById('helpSection');
                    if (helpSection) {
                        helpSection.style.display = 'none';
                    }
                    const settingSection = document.getElementById('settingSection');
                    if (settingSection) {
                        settingSection.style.display = 'none';
                    }

                }
                else if (targetId === 'notificationSection') {
                    const agendaSection = document.getElementById('agendaSection');
                    if (agendaSection) {
                        agendaSection.style.display = 'none';
                    }
                    const dashboardSection = document.getElementById('dashboardSection');
                    if (dashboardSection) {
                        dashboardSection.style.display = 'none';
                    }
                    const coinSection = document.getElementById('coinSection');
                    if (coinSection) {
                        coinSection.style.display = 'none';
                    }
                    const messagingSection = document.getElementById('messagingSection');
                    if (messagingSection) {
                        messagingSection.style.display = 'none';
                    }
                    const helpSection = document.getElementById('helpSection');
                    if (helpSection) {
                        helpSection.style.display = 'none';
                    }
                    const settingSection = document.getElementById('settingSection');
                    if (settingSection) {
                        settingSection.style.display = 'none';
                    }

                }
                else if (targetId === 'agendaSection') {
                    const notificationSection = document.getElementById('notificationSection');
                    if (notificationSection) {
                        notificationSection.style.display = 'none';
                    }
                    const dashboardSection = document.getElementById('dashboardSection');
                    if (dashboardSection) {
                        dashboardSection.style.display = 'none';
                    }
                    const coinSection = document.getElementById('coinSection');
                    if (coinSection) {
                        coinSection.style.display = 'none';
                    }
                    const messagingSection = document.getElementById('messagingSection');
                    if (messagingSection) {
                        messagingSection.style.display = 'none';
                    }
                    const helpSection = document.getElementById('helpSection');
                    if (helpSection) {
                        helpSection.style.display = 'none';
                    }
                    const settingSection = document.getElementById('settingSection');
                    if (settingSection) {
                        settingSection.style.display = 'none';
                    }

                }
                else if (targetId === 'coinSection') {
                    const notificationSection = document.getElementById('notificationSection');
                    if (notificationSection) {
                        notificationSection.style.display = 'none';
                    }
                    const dashboardSection = document.getElementById('dashboardSection');
                    if (dashboardSection) {
                        dashboardSection.style.display = 'none';
                    }
                    const agendaSection = document.getElementById('agendaSection');
                    if (agendaSection) {
                        agendaSection.style.display = 'none';
                    }
                    const messagingSection = document.getElementById('messagingSection');
                    if (messagingSection) {
                        messagingSection.style.display = 'none';
                    }
                    const helpSection = document.getElementById('helpSection');
                    if (helpSection) {
                        helpSection.style.display = 'none';
                    }
                    const settingSection = document.getElementById('settingSection');
                    if (settingSection) {
                        settingSection.style.display = 'none';
                    }

                }
                else if (targetId === 'messagingSection') {
                    const notificationSection = document.getElementById('notificationSection');
                    if (notificationSection) {
                        notificationSection.style.display = 'none';
                    }
                    const dashboardSection = document.getElementById('dashboardSection');
                    if (dashboardSection) {
                        dashboardSection.style.display = 'none';
                    }
                    const agendaSection = document.getElementById('agendaSection');
                    if (agendaSection) {
                        agendaSection.style.display = 'none';
                    }
                    const coinSection = document.getElementById('coinSection');
                    if (coinSection) {
                        coinSection.style.display = 'none';
                    }
                    const helpSection = document.getElementById('helpSection');
                    if (helpSection) {
                        helpSection.style.display = 'none';
                    }
                    const settingSection = document.getElementById('settingSection');
                    if (settingSection) {
                        settingSection.style.display = 'none';
                    }

                }
                else if (targetId === 'helpSection') {
                    const notificationSection = document.getElementById('notificationSection');
                    if (notificationSection) {
                        notificationSection.style.display = 'none';
                    }
                    const dashboardSection = document.getElementById('dashboardSection');
                    if (dashboardSection) {
                        dashboardSection.style.display = 'none';
                    }
                    const agendaSection = document.getElementById('agendaSection');
                    if (agendaSection) {
                        agendaSection.style.display = 'none';
                    }
                    const coinSection = document.getElementById('coinSection');
                    if (coinSection) {
                        coinSection.style.display = 'none';
                    }
                    const messagingSection = document.getElementById('messagingSection');
                    if (messagingSection) {
                        messagingSection.style.display = 'none';
                    }
                    const settingSection = document.getElementById('settingSection');
                    if (settingSection) {
                        settingSection.style.display = 'none';
                    }

                }
                else if (targetId === 'settingSection') {
                    const notificationSection = document.getElementById('notificationSection');
                    if (notificationSection) {
                        notificationSection.style.display = 'none';
                    }
                    const dashboardSection = document.getElementById('dashboardSection');
                    if (dashboardSection) {
                        dashboardSection.style.display = 'none';
                    }
                    const agendaSection = document.getElementById('agendaSection');
                    if (agendaSection) {
                        agendaSection.style.display = 'none';
                    }
                    const coinSection = document.getElementById('coinSection');
                    if (coinSection) {
                        coinSection.style.display = 'none';
                    }
                    const messagingSection = document.getElementById('messagingSection');
                    if (messagingSection) {
                        messagingSection.style.display = 'none';
                    }
                    const helpSection = document.getElementById('helpSection');
                    if (helpSection) {
                        helpSection.style.display = 'none';
                    }

                    // Affichez l'élément cible
                    targetElement.style.display = 'block';
                }
            };
        });

    });
});
