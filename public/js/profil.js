// Attend que le document soit prêt
$(document).ready(function () {
    // Ajoutez un gestionnaire de clic à tous les éléments li du menu
    $("ul li").click(function (e) {
        // Récupère le texte de l'élément cliqué
        var clickedText = $(this).text().trim();

        // Si l'élément cliqué est "Profile"
        if (clickedText === "Profile") {
            // Empêche le comportement par défaut du lien
            e.preventDefault();

            // URL par défaut du profil (à ajuster selon vos besoins)
            var profileUrl = "/profile";

            // Charge le contenu du profil via AJAX
            $.ajax({
                url: profileUrl,
                type: "GET",
                success: function (data) {
                    // Remplace le contenu de la page par le contenu du profil
                    $(".container").html(data);
                },
                error: function () {
                    alert(
                        "Une erreur est survenue lors du chargement du profil."
                    );
                },
            });
        } else if (clickedText === "Dashboard") {
            // Si l'élément cliqué est "Dashboard"
            // Ne fait rien et laisse le comportement par défaut du lien
        }
    });
});
