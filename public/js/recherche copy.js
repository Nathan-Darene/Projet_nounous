// profil.js
// Écoute l'événement de soumission du formulaire de recherche
$('.filters').submit(function(event) {
    // Empêche le comportement par défaut du formulaire
    event.preventDefault();

    // Récupère les données du formulaire
    var formData = $(this).serialize();

    // Envoie une requête AJAX au serveur avec les données du formulaire
    axios.post($(this).attr('action'), formData)
        .then(function(response) {
            // Supprime les anciens résultats
            $('.nounou-affiche').empty();

            // Affiche les nouveaux résultats sur la page
            response.data.forEach(function(profil) {
                $('.nounou-affiche').append('<div class="profil">' +
                    '<img src="' + profil.photo + '" alt="photo de profil">' +
                    '<h3>' + profil.nom + '</h3>' +
                    '<p>' + profil.description + '</p>' +
                    '</div>');
            });
        })
        .catch(function(error) {
            // Affiche une erreur en cas d'échec de la requête
            $('.error').text('Une erreur s\'est produite lors de la récupération des profils.');
        });
});
