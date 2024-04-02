// Attend que le document soit prêt
$(document).ready(function () {
    // URL de la page de message (à ajuster selon vos besoins)
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
            alert("Une erreur est survenue lors du chargement de la page de message.");
        },
    });
});
