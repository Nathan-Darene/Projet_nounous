// Attend que le document soit chargé
document.addEventListener('DOMContentLoaded', function () {
    // Récupère tous les éléments avec la classe 'delete-icon'
    var deleteIcons = document.querySelectorAll('.delete-icon');

    // Pour chaque icône de corbeille, ajoute un écouteur d'événements pour le clic
    deleteIcons.forEach(function (icon) {
        icon.addEventListener('click', function () {
            // Récupère le parent de l'icône de corbeille (la div 'user')
            var userDiv = icon.closest('.user');
            // Cache le parent ('userDiv')
            userDiv.style.display = 'none';
        });
    });
});



document.addEventListener('DOMContentLoaded', function () {
    // Récupère tous les éléments avec la classe 'delete-icon'
    var deleteIcons = document.querySelectorAll('.delete-icon');

    // Pour chaque icône de corbeille, ajoute un écouteur d'événements pour le clic
    deleteIcons.forEach(function (icon) {
        icon.addEventListener('click', function () {
            // Récupère le parent de l'icône de corbeille (la div 'user')
            var userDiv = icon.closest('.nounou');
            // Cache le parent ('userDiv')
            userDiv.style.display = 'none';
        });
    });
});
