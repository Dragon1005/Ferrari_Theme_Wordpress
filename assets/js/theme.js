
// znajdź przycisk, który będzie wywoływał przewijanie



window.onload = function() {
    // Kod JavaScript, który zostanie uruchomiony po załadowaniu strony
    var button = document.getElementById('btn');

    button.addEventListener('click', function() {
        // znajdź sekcję, do której będziemy przewijać stronę
        var section = document.getElementById('main');
        // oblicz pozycję sekcji na stronie
        var sectionPosition = section.offsetTop;
      
        // wykonaj płynną animację przewijania do sekcji
        window.scrollTo({
          top: sectionPosition,
          behavior: 'smooth'
        });
      });

};





