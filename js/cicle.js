
$(document).ready(function() {
    var slides = [
      { src: "img/celular.png", alt: "Celulares Mercado Novo" },
      { src: "img/roupa.png", alt: "Roupas Mercado Novo" },
      { src: "img/tenis.png", alt: "Tênis Mercado Novo" }
    ];
    
    var currentSlide = 0;
    
    function showSlide(index) {
      $(".carousel-container img").attr("src", slides[index].src);
      $(".carousel-container img").attr("alt", slides[index].alt);
    }
    
    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }
    
    function prevSlide() {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
    }
    
    $(".prev").click(prevSlide);
    $(".next").click(nextSlide);
    
    // Função para transição automática a cada 3 segundos
    var interval = setInterval(nextSlide, 3000);
    
    // Pausar transição automática quando o mouse estiver sobre o carrossel
   /* $(".carousel-container").hover(
      function() {
        clearInterval(interval);
      },
      function() {
        interval = setInterval(nextSlide, 3000);
      }
    );*/
  });