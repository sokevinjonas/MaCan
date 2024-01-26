function generateRandomName() {
    // Longueur de la chaîne aléatoire
    const length = 8;
    
    // Caractères possibles dans le nom de fichier
    const characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    let randomName = '';
    
    // Générer une chaîne aléatoire en utilisant Math.random()
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        randomName += characters.charAt(randomIndex);
    }

    return randomName;
}

function modifyAndDownloadImage() {
    
    const croppedCanvas = cropper.getCroppedCanvas();
    const ctx = croppedCanvas.getContext('2d');

    // Styliser le nom et prénom
    ctx.font = 'bold 50px Arial';// Police de 250 pixels en gras
    ctx.fillStyle = colorChoisi;
    ctx.textAlign = 'center';
    ctx.fillText(nomPrenom, croppedCanvas.width / 2, croppedCanvas.height / 2 - 150); // Décalage vers le haut

    // Ajouter 3 saut de ligne
    ctx.fillText('\n\n\n', croppedCanvas.width / 2, croppedCanvas.height / 2 - 300);

    // Styliser le chiffre
    ctx.font = 'bold 200px Arial'; // Police de 1020 pixels en 
    ctx.fillStyle = colorChoisi;
    ctx.textAlign = 'center';
    ctx.fillText(chiffre, croppedCanvas.width / 2, croppedCanvas.height / 2 + 70); // Décalage vers le bas

    // Créer un lien de téléchargement pour l'image modifiée
    const downloadLink = document.createElement('a');
    downloadLink.href = croppedCanvas.toDataURL('image/png');
    // Générer un nom aléatoire

    // Utiliser le nom aléatoire pour le téléchargement
    const randomFileName = nomPrenom + '.png';
    downloadLink.download = randomFileName;

    // Ajouter le lien au document et déclencher le téléchargement
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
}
