const hoverDiv = document.getElementById('hover-div');
const hoverSound = document.getElementById('hover-sound');

hoverDiv.addEventListener('mouseenter', () => {
  hoverSound.play();
});
