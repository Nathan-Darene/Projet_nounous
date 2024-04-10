// Fonction pour démarrer la lecture audio
function startAudio() {
    lecteurAudio.play();
    boutonToggle.textContent = 'Pause';
}

// Fonction pour mettre en pause la lecture audio
function pauseAudio() {
    lecteurAudio.pause();
    boutonToggle.textContent = 'Play';
}

// Récupérer le lecteur audio et le bouton de lecture
var lecteurAudio = document.getElementById('lecteur-audio');
var boutonToggle = document.getElementById('bouton-toggle');

// Vérifier l'état de lecture au chargement de la page et lancer la lecture si nécessaire
document.addEventListener('DOMContentLoaded', function() {
    // Lancer la lecture si le lecteur audio est en pause
    if (lecteurAudio.paused) {
        startAudio();
    }
});

// Gérer le clic sur le bouton de lecture
boutonToggle.addEventListener('click', function() {
    // Si le lecteur est en pause, démarrer la lecture, sinon le mettre en pause
    if (lecteurAudio.paused) {
        startAudio();
    } else {
        pauseAudio();
    }
});
