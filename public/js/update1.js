// JavaScript pour afficher la fenêtre modale
const editButton = document.getElementById('editButton');
const editModal = document.getElementById('editModal');

editButton.addEventListener('click', () => {
  editModal.style.display = 'block';
});

// Fermer la fenêtre modale en cliquant sur la croix
const closeButton = document.querySelector('.close');
closeButton.addEventListener('click', () => {
  editModal.style.display = 'none';
});
