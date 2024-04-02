// Attend que le document soit prêt
$(document).ready(function () {
    // Ajoutez un gestionnaire de clic à tous les éléments li du menu
    $("ul li").click(function (e) {
        // Récupère le texte de l'élément cliqué
        var clickedText = $(this).text().trim();

        // Si l'élément cliqué est "Message"
        if (clickedText === "Messagerie") {
            // Empêche le comportement par défaut du lien
            e.preventDefault();

            // URL par défaut du message (à ajuster selon vos besoins)
            var messageUrl = "/message";

            // Charge le contenu de la page de message via AJAX
            $.ajax({
                url: messageUrl,
                type: "GET",
                success: function (data) {
                    // Remplace le contenu de la page par le contenu de la page de message
                    $("#container").html(data);
                },
                error: function () {
                    alert(
                        "Une erreur est survenue lors du chargement de la page de message."
                    );
                },
            });
        }
    });
});
