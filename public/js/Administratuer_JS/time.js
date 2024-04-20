// Fonction pour mettre à jour l'heure actuelle
function updateCurrentTime() {
    // Créer un nouvel objet Date
    var date = new Date();

    // Extraire l'heure, les minutes et les secondes de l'objet Date
    var heure = date.getHours();
    var minutes = date.getMinutes();
    var secondes = date.getSeconds();

    // Formater l'heure au format HH:MM:SS
    var heureActuelle = heure + ":" + minutes + ":" + secondes;

    // Mettre à jour le contenu de la balise avec l'heure actuelle
    document.getElementById('current-time').innerText = heureActuelle;
}

// Mettre à jour l'heure actuelle toutes les secondes (1000 millisecondes)
setInterval(updateCurrentTime, 1000);


