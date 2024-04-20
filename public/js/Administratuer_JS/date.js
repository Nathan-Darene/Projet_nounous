// Fonction pour mettre à jour la date actuelle
function updateCurrentDate() {
    // Créer un nouvel objet Date
    var date = new Date();

    // Extraire l'année, le mois et le jour de l'objet Date
    var annee = date.getFullYear();
    var mois = ('0' + (date.getMonth() + 1)).slice(-2); // Les mois sont indexés à partir de zéro, donc ajout de 1
    var jour = ('0' + date.getDate()).slice(-2);

    // Formater la date au format jj-mm-aaaa
    var dateActuelle = jour + "-" + mois + "-" + annee;

    // Mettre à jour le contenu de la balise avec la date actuelle
    document.getElementById('current-date').innerText = dateActuelle;
}

// Mettre à jour la date actuelle une fois au chargement de la page
updateCurrentDate();
