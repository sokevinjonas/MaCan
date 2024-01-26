<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


use App\Models\HistoriqueEnregistrementGenerer;

class AcceuilFormLivewireTelephone extends Component
{
     
    public $nom;
    public $prenom;
    public $chiffre;
    private function rules()
    {
        return [
        
            'nom' => 'required|string|regex:/^[\pL\s\-\'.,!?]+$/u|max:12',
            'prenom' => 'required|string|regex:/^[\pL\s\-\'.,!?]+$/u|max:12',
            'chiffre' => 'required|string|regex:/^[0-9]+$/|min:1|max:2',
            
        ];
    }

    private function customMessages()
    {
        return [

            'nom.required' => 'Le champ nom est requis.',
            'nom.string' => 'Le champ nom doit être une chaîne de caractères.',
            'nom.regex' => 'Le champ nom ne peut pas contenir de caractères inconnue',
            'nom.max' => 'Le champ nom ne doit pas dépasser 12 caractères.',
            
            'prenom.required' => 'Le champ prenom est requis.',
            'prenom.string' => 'Le champ prenom doit être une chaîne de caractères.',
            'prenom.regex' => 'Le champ prenom ne peut pas contenir de caractères inconnue',
            'prenom.max' => 'Le champ prenom ne doit pas dépasser 12 caractères.',

            'chiffre.required' => 'Le champ chiffre est requis.',
            'chiffre.string' => 'Le champ chiffre doit être une chaîne de caractères.',
            'chiffre.regex' => 'Le champ chiffre doit contenir uniquement des chiffres',
            'chiffre.min' => 'Le champ chiffre doit avoir obligatoirement 1 chiffres.',
            'chiffre.max' => 'Le champ chiffre doit avoir obligatoirement 2 chiffres.',

        ];
    }

    
    public function saveNewGenerationCoursTelephone()
    {
        // Validation des données
        $this->validate($this->rules(), $this->customMessages());

        
        if(strlen($this->nom >= 7)){
        $nomFormate = strtoupper(substr($this->nom, 0, 1)) . '.';
        $nouveau_enregistrement = new HistoriqueEnregistrementGenerer();
        $nouveau_enregistrement->nom = $nomFormate;
        $nouveau_enregistrement->prenom = $this->prenom ;
        $nouveau_enregistrement->chiffre = $this->chiffre;
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
        return view('livewire.acceuil-form-livewire-telephone');
    }
}