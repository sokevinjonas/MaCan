<div>

    <form wire:submit="ConnexionAdmin" class="mt-4 p-4" style="background-color: #fff;">
        @csrf
        <div class="d-flex flex-column">

            <div class="mb-3">
                <label class="d-flex text-noir">Adresse mail <strong class="px-1" style="color: #ff914d; font-size:1.3em;">*</strong></label>
                <input class="form-control form-control-lg b-1Digi" type="email" id="email" name="email" wire:model.live="email"/>
                @error('email')
                    <div style="color: #ff914d;">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="d-flex text-noir">Mot de passe <strong class="px-1" style="color: #ff914d; font-size:1.3em;">*</strong></label>
                <input class="form-control form-control-lg b-1Digi" type="password" id="password" name="password" wire:model.live="password"/>
                @error('password')
                    <div style="color: #ff914d;">{{ $message }}</div>
                @enderror
                
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="p-2 px-3">
                Soumettre!
            </button>
        </div>
    </form>
</div>
