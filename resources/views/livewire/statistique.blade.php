<div class="col-xl-6 d-flex flex-column pe-4 position-relative">
    <div class="position-absolute" style="top: -1em;">
        <a class="p-2 px-3" wire:click="actualisationDonnee"
            style="background-color: #e40606; color: #fff;">Actualisation</a>
    </div>

    <h3 class="p-3 mt-3">Bilan global</h3>
    <div class="col-xl-12 d-flex flex-column m3-4">
        <p class="description">Visiteurs découvrant le site </p>
        <h3 class="p-2 px-3" style="background-color: #0E4030; color: #fff; border-radius:5px;">
            <span class="text-blanc">Total :</span>
            <strong class="text-blanc" id="ChiffreVisiteur">{{ $valeurVisiteur }}</strong>
        </h3>
    </div>

    <div class="col-xl-12 d-flex flex-column mb-3">
        <p class="description">Les actions terminées :</p>
        <h3 class="p-2 px-3" style="background-color: #0E4030; color: #fff; border-radius:5px;">
            <span class="text-blanc">Total :</span>
            <strong class="text-blanc" id="ChiffreTermine">{{ $valeurTermine }}</strong>
        </h3>
    </div>


    <div class="col-xl-12 d-flex flex-column mb-3">
        <p class="description">Personnes effectuant des actions à moitié </p>
        <h3 class="p-2 px-3" style="background-color: #0E4030; color: #fff; border-radius:5px;">
            <span class="text-blanc">Total :</span>
            <strong class="text-blanc" id="ChiffreMoitie">{{ $valeurMoitie }}</strong>
        </h3>
    </div>

</div>
