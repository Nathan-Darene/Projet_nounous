
  /*  // Définir la fonction pour récupérer les données depuis le contrôleur Laravel et les afficher
    function afficherNounous() {
        // Effectuer une requête Ajax vers votre route Laravel
        $.ajax({
            url: '{{ route('rechercher.nounous') }}', // Utiliser la route Laravel pour la recherche
            type: 'POST', // Utiliser la méthode POST pour envoyer les données
            dataType: 'json', // Attendre une réponse JSON
            data: $('.filters').serialize(), // Envoyer les données du formulaire
            success: function(response) {
                // Effacer le contenu précédent
                $('.nounou-affiche').empty();

                // Afficher les résultats de la recherche
                $.each(response.nounous, function(index, nounou) {
                    var html = '<div class="nounou">' +
                                    '<h3>' + nounou.username + '</h3>' +
                                    '<p>' + nounou.city + '</p>' +
                                '</div>';
                    $('.nounou-affiche').append(html);
                });
            },
            error: function(xhr, status, error) {
                // Gérer les erreurs
                console.error(xhr.responseText);
            }
        });
    }

    // Appeler la fonction pour afficher les nounous lorsque la page est prête
    $(document).ready(function() {
        afficherNounous();

        // Ajouter un écouteur d'événement sur le formulaire pour afficher les résultats lors de la soumission
        $('.filters').submit(function(event) {
            event.preventDefault(); // Empêcher le rechargement de la page
            afficherNounous(); // Appeler la fonction pour afficher les nounous
        });
    });
*/
