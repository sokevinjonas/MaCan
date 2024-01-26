<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


use App\Models\HistoriqueEnregistrementGenerer;

class CouleurEnregistrement extends Component
{
    public $choix_couleur;
    public $verificationDonne;
    public $telechargement;
    public $donnee;
    
    public function mount($donnee)
    {
        $this->donnee = $donnee;
        $this->verificationDonne = HistoriqueEnregistrementGenerer::where('id_enregistrement', $this->donnee)->first();
    }
    
    protected function rules()
    {
        return [
            'choix_couleur' => 'required|in:vert,jaune,blanc',
        ];
    }
    
    protected function customMessages()
    {
        return [
            'choix_couleur.required' => 'Veuillez sélectionner une couleur.',
            'choix_couleur.in' => 'La couleur sélectionnée n\'est pas valide.',
        ];
    }
    
    public function saveNewImageCouleur()
    {
        $this->validate($this->rules(), $this->customMessages());
    
        if ($this->verificationDonne) {
            $this->verificationDonne->couleur = $this->choix_couleur;
    
            if ($this->verificationDonne->save()) {

                flash()->addSuccess("Le téléchargement est en cours");

                return redirect()->route('success');

            } else {
                flash()->addError("Erreur d'enregistrement de votre couleur");
            }
        } else {
                flash()->addError("Enregistrement introuvable.");
        }
    }

    public function render()
    {
        return view('livewire.couleur-enregistrement');
    }
}
