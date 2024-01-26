<div class="row mt-5 ">
    <div class="col form-telephone">
        <form id="FormulaiRe1" wire:submit="saveNewGenerationCoursTelephone" class="mt-4 b-1Digi p-4"
            style="background-color: #fff;">
            @csrf
            <h3>Générer un maillot numérique</h3>
            <div class="d-flex flex-column">

                <div class="mb-3">
                    <label class="d-flex text-noir">Nom <strong class="px-1"
                            style="color: #ff914d; font-size:1.3em;">*</strong></label>
                    <input class="form-control form-control-lg b-1Digi" type="text" id="nom" name="nom"
                        wire:model.live="nom" placeholder="Entrez votre nom" />
                    @error('nom')
                        <div style="color: #ff914d;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="d-flex text-noir">Prénom <strong class="px-1"
                            style="color: #ff914d; font-size:1.3em;">*</strong></label>
                    <input class="form-control form-control-lg b-1Digi" type="text" id="prenom" name="prenom"
                        wire:model.live="prenom" placeholder="Entrez votre Prenom" />
                    @error('prenom')
                        <div style="color: #ff914d;">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label class="d-flex text-noir">Numero dossard <strong class="px-1"
                            style="color: #ff914d; font-size:1.3em;">*</strong></label>
                    <input class="form-control form-control-lg b-1Digi" type="number" id="chiffre" name="chiffre"
                        wire:model.live="chiffre" placeholder="Numero dossard" />
                    @error('chiffre')
                        <div style="color: #ff914d;">{{ $message }}</div>
                    @enderror

                </div>
            </div>
            <div class="text-center mt-3">
                <button type="submit" id="playButton" class="p-2 px-3">
                    Cliquez ici pour continuer😊
                </button>
            </div>
        </form>
    </div>

</div>
