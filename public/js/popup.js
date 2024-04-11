document.querySelectorAll('.poppup').forEach(item => {
    item.addEventListener('mouseenter', event => {
      const hoverSound = document.getElementById('hover-sound');
      hoverSound.play();
    });
  });


  document.querySelectorAll('.box').forEach(item => {
    item.addEventListener('mouseenter', event => {
      const hoverSound = document.getElementById('hover-poppup');
      hoverSound.play();
    });
  });
