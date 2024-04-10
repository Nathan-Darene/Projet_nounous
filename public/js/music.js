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
    // Récupérer l'état de lecture depuis le localStorage
    var lecteurAudioState = localStorage.getItem('lecteurAudioState');
    // Si l'état de lecture est 'playing', démarrer la lecture
    if (lecteurAudioState === 'playing') {
        startAudio();
    }
});

// Gérer le clic sur le bouton de lecture
boutonToggle.addEventListener('click', function() {
    // Si le lecteur est en pause, démarrer la lecture, sinon le mettre en pause
    if (lecteurAudio.paused) {
        startAudio();
        // Sauvegarder l'état de lecture dans le localStorage
        localStorage.setItem('lecteurAudioState', 'playing');
    } else {
        pauseAudio();
        // Sauvegarder l'état de lecture dans le localStorage
        localStorage.setItem('lecteurAudioState', 'paused');
    }
});

// Ajouter un événement à chaque lien pour intercepter la navigation
var liens = document.querySelectorAll('a');
liens.forEach(function(lien) {
    lien.addEventListener('click', function(event) {
        // Sauvegarder l'état de lecture dans le localStorage
        localStorage.setItem('lecteurAudioState', lecteurAudio.paused ? 'paused' : 'playing');
    });
});
