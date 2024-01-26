<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\HistoriqueEnregistrementGenerer;
use App\Models\visiteur;

class Statistique extends Component
{
    public $valeurMoitie;
    public $valeurTermine;
    public $valeurVisiteur;

    public function mount()
    {
        $this->valeurMoitie = HistoriqueEnregistrementGenerer::where('couleur', '')->count();
        $this->valeurTermine = HistoriqueEnregistrementGenerer::where('couleur', '!=', '')->count();
        $this->valeurVisiteur = visiteur::count();;

    }

    public function actualisationDonnee() 
    {

        return redirect()->route('odc.acceuil');
    }
    
    public function render()
    {
        return view('livewire.statistique');

    }
}
