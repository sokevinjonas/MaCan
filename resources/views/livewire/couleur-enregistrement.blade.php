<div class="row mb-4">
    <div class="col-lg-8 ghhBest">
        <div class="position-relative">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex ClassIdentite">
                    <strong class="d-flex" id="nomPrenomChoix1">{{ $verificationDonne->nom }}</strong>
                    <strong class="d-flex" id="nomPrenomChoix2">{{ $verificationDonne->prenom }}</strong>
                </div>
                <h3 id="ChiffreChoix">{{ $verificationDonne->chiffre }}</h3>
            </div>
            <img src="/assets/img/blanc.jpg" alt="" class="w-100 h b-1Digi" id="imgDefault">
        </div>
    </div>
    <div class="col-lg-4 gap-3 d-flex flex-column">
        <h4 class="text-center mt-3">Veuillez selectionne la couleur du maillot 👇!</h4>
        <form wire:submit="saveNewImageCouleur">
            @csrf
            <div class="d-flex justify-content-center">
                <label class="form-check nav-link fw-semi-bold d-flex gap-3">
                    <input type="radio" class="form-check-input" value="vert" name="choix_couleur" id="vert"
                        wire:model="choix_couleur"
                        style="background-color: #0E4030; width: 50px; height: 50px; border-radius: 50%;">
                    {{-- <span>Vert</span> --}}
                </label>

                <label class="form-check nav-link fw-semi-bold d-flex gap-3">
                    <input type="radio" class="form-check-input" value="jaune" name="choix_couleur" id="jaune"
                        wire:model="choix_couleur"
                        style="background-color: #e7e300;width: 50px; height: 50px; border-radius: 50%;">
                    {{-- <span>Jaune</span> --}}
                </label>

                <label class="form-check nav-link fw-semi-bold d-flex gap-3">
                    <input type="radio" class="form-check-input" value="blanc" name="choix_couleur" id="blanc"
                        wire:model="choix_couleur"
                        style="background-color: #ffff;width: 50px; height: 50px; border-radius: 50%;">
                    {{-- <span>Blanc</span> --}}
                </label>
            </div>
            @if (!isset($telechargement))
                <div class="text-center mt-3" id="buttonValider" style="display: none;">
                    <button type="submit" class="p-2 px-3" onclick="modifyAndDownloadImage()">Télécharger mon
                        maillot</button>
                </div>
            @endif
        </form>
    </div>
</div>
