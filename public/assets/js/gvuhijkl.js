/*!
 * 
 * JS 3 personnalisé par Jonas SO 
 * site web : amosag.com
 * mail : contact@amosag.com 
 *
 */

// Attendre que le DOM soit prêt
    var couleurRadios = document.querySelectorAll('input[name="choix_couleur"]');
    var selectedCouleur = document.querySelector('input[name="choix_couleur"]:checked');
    var nomPrenomChoix1 = document.getElementById('nomPrenomChoix1');
    var nomPrenomChoix2 = document.getElementById('nomPrenomChoix2');
    var imgSrc = document.getElementById('imgDefault');
    var ChiffreChoix = document.getElementById('ChiffreChoix');
    const imageContainer = document.querySelector('.ghhBest');
    var buttonTele = document.getElementById('buttonValider');


    // Ajoute le nom, prénom et chiffre au milieu de la zone sélectionnée
    var TextnomPrenomChoix1 = $("#nomPrenomChoix1").text();
    var TextnomPrenomChoix2 = $("#nomPrenomChoix2").text();
    var chiffre = $("#ChiffreChoix").text();

    var nomPrenom = TextnomPrenomChoix1 + ' ' + TextnomPrenomChoix2;
        
    let cropper;

    let colorChoisi;

    updateTextColors("green");

    couleurRadios.forEach(radio => {
        radio.addEventListener('change', ChangeTchirtSrc);
    });

    function ChangeTchirtSrc() {

        selectedCouleur = document.querySelector('input[name="choix_couleur"]:checked'); // Mettre à jour la variable ici
        
        let imageBest;

        if (selectedCouleur) {
            if (selectedCouleur.value === "blanc") {
                imgSrc.src = '/assets/img/blanc.jpg';
                imageBest = '/assets/img/blanc.jpg';
                updateTextColors("green");
                colorChoisi = "green";
            } else if (selectedCouleur.value === "jaune") {
                imgSrc.src = '/assets/img/jaune.jpg';
                imageBest = '/assets/img/jaune.jpg';
                updateTextColors("green");
                colorChoisi = "green";
            } else if (selectedCouleur.value === "vert") {
                imgSrc.src = '/assets/img/vert.jpg';
                imageBest = '/assets/img/vert.jpg';
                updateTextColors("#fff");
                colorChoisi = "#fff";
            }

            // Remove the existing Cropper instance if it exists
            if (cropper) {
                cropper.destroy();
            }

            // Create a hidden img element for Cropper.js
            const cropperImage = document.createElement('img');
            cropperImage.style.display = 'none';
            cropperImage.src = imageBest;
            imageContainer.appendChild(cropperImage);

            // Create the new Cropper instance using the image size and enabling auto-cropping
            cropper = new Cropper(cropperImage, {
                aspectRatio: 1,
                autoCrop: true,
                autoCropArea: 1,
            });

            buttonTele.style.display = 'block';
        
        
            
        }
    }

    function updateTextColors(color) {
        nomPrenomChoix1.style.color = color;
        nomPrenomChoix2.style.color = color;
        ChiffreChoix.style.color = color;
    }

    


// Reste du code inchangé...
