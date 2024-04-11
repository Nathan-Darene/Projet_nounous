$(document).ready(function () {
    $("form.filters").submit(function (event) {
        event.preventDefault(); // Empêcher la soumission du formulaire par défaut

        var formData = $(this).serialize(); // Sérialiser les données du formulaire
        
        // Effectuer une requête AJAX
        $.ajax({
            type: "POST",
            url: $(this).attr("action"), // Récupérer l'URL d'action du formulaire
            data: formData,
            dataType: "json", // Attendre une réponse JSON
            success: function (response) {
                var nounous = response.nounous; // Récupérer les données des nounous
                var annonces = response.annonces; // Récupérer les données des annonces
                var nounouAffiche = $(".nounou-affiche"); // Sélectionner la section d'affichage des nounous
                var annoncesAffiche = $(".annonces-affiche"); // Sélectionner la section d'affichage des annonces // Sélectionner la section d'affichage des nounous

                // Effacer le contenu précédent de la section
                nounouAffiche.empty();

                // Parcourir les données des nounous et les ajouter à la section
                $.each(nounous, function (index, nounou) {
                    // Créer un élément HTML pour afficher les détails de la nounou
                    var nounouHtml = '<div class="nounou-details">';
                    nounouHtml += '<img src="uploads/' + nounou.imageUpload +'"alt="' + nounou.username + '">'; // Remplacer 'nom' par le nom réel de la colonne de votre base de données
                    nounouHtml += '<h2>' + nounou.firstname + '</h2>'; // Remplacer 'firstname' par le nom réel de la colonne de votre base de données
                    nounouHtml += '<i class="fa-solid fa-user">' + nounou.role + '</i>'; // Remplacer 'role' par le role réel de la colonne de votre base de données
                    nounouHtml += '<i class="fa-solid fa-location-pin">' + nounou.city + '</i>'; // Remplacer 'city' par la ville  réel de la colonne de votre base de données
                    nounouHtml += '<p>' + nounou.description + '</p>'; // Remplacer 'nom' par le nom réel de la colonne de votre base de données
                    nounouHtml += '<p>' + nounou.prix_heure + '/heure</p>'; // Remplacer 'prix_heure' par le prix par heure réel de la colonne de votre base de données
                    nounouHtml += '<p>' + nounou.disponibilité + '</p>'; // Remplacer 'nom' par le nom réel de la colonne de votre base de données

                    nounouHtml += '</div>';

                    // Ajouter l'élément HTML à la section d'affichage des nounous
                    nounouAffiche.append(nounouHtml);
                });

                // Parcourir les données des annonces et les ajouter à la section
                $.each(annonces, function (index, annonce) {
                    // Créer un élément HTML pour afficher les détails de l'annonce
                    var annonceHtml = '<div class="annonce-details">';
                    annonceHtml += '<h3>' + annonce.titre + '</h3>'; // Remplacer 'titre' par le titre réel de la colonne de votre base de données
                    annonceHtml += '<p>' + annonce.description + '</p>'; // Remplacer 'description' par la description réelle de la colonne de votre base de données

                    annonceHtml += '</div>';
                    // Ajouter l'élément HTML à la section d'affichage des annonces
                    annoncesAffiche.append(annonceHtml);
                });


            },
            error: function (xhr, status, error) {
                // Gérer les erreurs de la requête AJAX
                console.error(error);
            },
        });
    });
});
