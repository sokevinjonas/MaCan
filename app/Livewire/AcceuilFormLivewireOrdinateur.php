<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


use App\Models\HistoriqueEnregistrementGenerer;

class AcceuilFormLivewireOrdinateur extends Component
{

     
    public $nomord;
    public $prenomord;
    public $chiffreord;

    private function rules()
    {
        return [

            'nomord' => 'required|string|regex:/^[\pL\s\-\'.,!?]+$/u|max:10',
            'prenomord' => 'required|string|regex:/^[\pL\s\-\'.,!?]+$/u|max:12',
            'chiffreord' => 'required|string|regex:/^[0-9]+$/|min:2|max:2',
            
        ];
    }

    private function customMessages()
    {
        return [

            'nomord.required' => 'Le champ nom est requis.',
            'nomord.string' => 'Le champ nom doit être une chaîne de caractères.',
            'nomord.regex' => 'Le champ nom ne peut pas contenir de caractères inconnue',
            'nomord.max' => 'Le champ nom ne doit pas dépasser 12 caractères.',
            
            'prenomord.required' => 'Le champ prenom est requis.',
            'prenomord.string' => 'Le champ prenom doit être une chaîne de caractères.',
            'prenomord.regex' => 'Le champ prenom ne peut pas contenir de caractères inconnue',
            'prenomord.max' => 'Le champ prenom ne doit pas dépasser 12 caractères.',

            'chiffreord.required' => 'Le champ chiffre est requis.',
            'chiffreord.string' => 'Le champ chiffre doit être une chaîne de caractères.',
            'chiffreord.regex' => 'Le champ chiffre doit contenir uniquement des chiffres',
            'chiffreord.min' => 'Le champ chiffre doit avoir obligatoirement 1 chiffres.',
            'chiffreord.max' => 'Le champ chiffre doit avoir obligatoirement 2 chiffres.',

        ];
    }


    
    public function saveNewGenerationCoursOrdinateur()
    {
        // Validation des données
        $this->validate($this->rules(), $this->customMessages());
        
        if(strlen($this->nomord >=7)) {
            $nomFormate = strtoupper(substr($this->nomord, 0, 1)) . '.';
        $nouveau_enregistrement = new HistoriqueEnregistrementGenerer();
        $nouveau_enregistrement->nom = $nomFormate;
        $nouveau_enregistrement->prenom = $this->prenomord;
        $nouveau_enregistrement->chiffre = $this->chiffreord;
        $nouveau_enregistrement->couleur = "";
        
        if($nouveau_enregistrement->save()) {

            return redirect()->route('choix', ['donnee' => $nouveau_enregistrement->id_enregistrement]);
            
        }else {

            return redirect()->route('index', '#FormulaiRe1');
        }
        }

    }

    public function render()
    {
        return view('livewire.acceuil-form-livewire-ordinateur');
    }
}