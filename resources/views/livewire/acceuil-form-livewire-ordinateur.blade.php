<div class="col-lg-6">
    <form id="FormulaiRe1" wire:submit="saveNewGenerationCoursOrdinateur" class="mt-4 b-1Digi p-4"
        style="background-color: #fff;">
        @csrf
        <h3>Générer un maillot numérique</h3>
        <div class="d-flex flex-column">

            <div class="mb-3">
                <label class="d-flex text-noir">Nom <strong class="px-1"
                        style="color: #ff914d; font-size:1.3em;">*</strong></label>
                <input class="form-control form-control-lg b-1Digi" type="text" id="nom" name="nomord"
                    wire:model="nomord" placeholder="Ex: ODG" />
                @error('nomord')
                    <div style="color: #ff914d;">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="d-flex text-noir">Prénom <strong class="px-1"
                        style="color: #ff914d; font-size:1.3em;">*</strong></label>
                <input class="form-control form-control-lg b-1Digi" type="text" id="prenom" name="prenomord"
                    wire:model="prenomord" placeholder="Ex: Fabrice" />
                @error('prenomord')
                    <div style="color: #ff914d;">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label class="d-flex text-noir">Numéros (Chiffre) <strong class="px-1"
                        style="color: #ff914d; font-size:1.3em;">*</strong></label>
                <input class="form-control form-control-lg b-1Digi" type="number" id="chiffre" name="chiffreord"
                    wire:model="chiffreord" placeholder="Ex: 10" />
                @error('chiffreord')
                    <div style="color: #ff914d;">{{ $message }}</div>
                @enderror

            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" id="playButton" class="p-2 px-3">
                Commencer à Générer!
            </button>
        </div>
    </form>
</div>
