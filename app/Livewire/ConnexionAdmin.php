<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

use App\Models\Administrateurs;

class ConnexionAdmin extends Component
{
  
    public $email;
    public $password;
    public $credential;

    private function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
            
        ];
    }
    
    private function customMessages()
    {
        return [

            
            'email.required' => 'L\'adresse e-mail est requise.',
            'email.email' => 'L\'adresse e-mail doit être valide.',
            'password.required' => 'Le mot de passe est requis.',

        ];
    }

    public function ConnexionAdmin()
    {
        // Validation des données
        $this->validate($this->rules(), $this->customMessages());
       
        $this->credential = [
            'email' => $this->email,
            'password' => $this->password
        ];

        if (Administrateurs::login($this->credential) == true) {
            // on ouvre une session pour le personnel
            $this->reset(['email', 'password']);  // Reset form fields
            session()->regenerate();
            return redirect()->route('odc.acceuil');
        } else {
            flash()->addError("Erreur de connexion");
        }
    }


    public function render()
    {
        return view('livewire.connexion-admin');
    }
}