// Sélectionnez tous les éléments li dans la liste
const liElements = document.querySelectorAll('.choixx li');

// Parcours de chaque élément li pour ajouter un écouteur d'événement de clic
liElements.forEach(li => {
    li.addEventListener('click', function() {
        // Supprimez la classe "clicked" de tous les éléments li pour réinitialiser leur style
        liElements.forEach(item => {
            item.classList.remove('clicked');
        });
        // Ajoutez la classe "clicked" uniquement à l'élément li actuel sur lequel vous avez cliqué
        this.classList.add('clicked');
    });
});


