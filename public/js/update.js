const editForm = document.getElementById('editForm');

editForm.addEventListener('submit', (e) => {
  e.preventDefault();

  // Récupérer les données du formulaire
  const formData = new FormData(editForm);

  // Envoyer les données via AJAX
  fetch('/update-profile', {
    method: 'POST',
    body: formData
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    // Traitez la réponse du serveur si nécessaire
    console.log(data);
    // Fermer la fenêtre modale après l'édition réussie
    editModal.style.display = 'none';
  })
  .catch(error => {
    console.error('There has been a problem with your fetch operation:', error);
  });
});
