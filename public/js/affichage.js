$(document).ready(function() {
    $('.btn').on('click', function() {
        // Effectuer une requête AJAX vers la route Laravel pour récupérer les nounous disponibles
        axios.get('{{ route("rechercher.nounous") }}', {
            params: $('.filters').serialize() // Sérialiser les données du formulaire
        })
        .then(function(response) {
            // Effacer le contenu précédent de la section d'affichage
            $('.nounou-affiche').empty();

            // Ajouter les nouveaux résultats à la section d'affichage
            response.data.forEach(function(nounou) {
                var html = '<div class="nounou">' +
                '<h3>' + nounou.nom + '</h3>' +
                '<p>' + nounou.ville + '</p>' +
                '<p>' + nounou.description + '</p>' +
                '<p>' + nounou.prix + '/ heure</p>' +
                '<p>' + nounou.disponibilité + '</p>' +
                '</div>';
                $('.nounou-affiche').append(html);
            });
        })
        .catch(function(error) {
            // Gérer les erreurs de requête AJAX
            console.error(error);
        });
    });
});


