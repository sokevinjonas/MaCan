/*!
 * 
 * JS 1 personnalisé par Jonas SO 
 * site web : amosag.com
 * mail : contact@amosag.com
 *
 */
document.addEventListener("DOMContentLoaded", function () {
    let currentSlide = 0;
    const slides = document.querySelectorAll(".carousel-slide");
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? "block" : "none";
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    // Affichage initial
    showSlide(currentSlide);

    // Défilement automatique toutes les 3 secondes (3000 millisecondes)
    setInterval(nextSlide, 3000);


});