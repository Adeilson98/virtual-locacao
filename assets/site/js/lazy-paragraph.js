document.addEventListener("DOMContentLoaded", function() {
    var lazyParagraph = document.getElementById("lazy-paragraph");

    function handleIntersection(entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // lazyParagraph.innerHTML = "Este é um exemplo de parágrafo com lazy loading.";
          lazyParagraph.style.opacity = 1;
          observer.unobserve(lazyParagraph);
        }
      });
    }

    var options = {
      root: null,
      rootMargin: "0px",
      threshold: 0.5 // Define o ponto de interseção a 50% para carregar quando pelo menos metade do elemento estiver visível
    };

    var observer = new IntersectionObserver(handleIntersection, options);

    observer.observe(lazyParagraph);
});