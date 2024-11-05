
document.getElementById('play-button').addEventListener('click', function() {
    // Ocultar el botón de Jugar
    this.style.display = 'none';
    
  
    const animation = document.getElementById('intro-animation');
    animation.classList.remove('hidden');

    const video = document.getElementById('intro-video');
    
   
    video.muted = false;  // video no silenciado
    video.play();         // Reproduce el video

    video.onended = function() {
        // Ocultar la animación
        animation.classList.add('hidden');

        // Mostrar la pantalla del juego
        const gameScreen = document.getElementById('game-screen');
        gameScreen.style.display = 'flex'; 
    };
});
