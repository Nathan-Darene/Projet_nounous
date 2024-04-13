// Sélectionnez le formulaire
const form = document.querySelector('form');

// Écoutez l'événement de soumission du formulaire
form.addEventListener('submit', function(event) {
    // Empêchez le comportement par défaut du formulaire (rechargement de la page)
    event.preventDefault();

    // Créez un nouvel objet FormData pour les données du formulaire
    const formData = new FormData(form);

    // Effectuez une requête AJAX avec les données du formulaire
    fetch(form.action, {
        method: form.method,
        body: formData
    })
    .then(response => response.json()) // Convertit la réponse en JSON
    .then(data => {
        // Vérifiez si la réponse contient un message de succès
        if (data.success) {
            // Affichez le message de succès sur la page
            const successMessage = document.createElement('div');
            successMessage.classList.add('alert', 'alert-success');
            successMessage.textContent = data.success;
            document.querySelector('.affichage').appendChild(successMessage);
        } else if (data.error) {
            // Affichez le message d'erreur sur la page
            const errorMessage = document.createElement('div');
            errorMessage.classList.add('alert', 'alert-danger');
            errorMessage.textContent = data.error;
            document.querySelector('.affichage').appendChild(errorMessage);
        }
    })
    .catch(error => {
        console.error('Erreur lors de la soumission du formulaire:', error);
    });
});
