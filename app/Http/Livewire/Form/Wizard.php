<?php

namespace App\Http\Livewire\Form;

use App\Models\Plaignant;
use App\Models\Plainte;
use Livewire\Component;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class Wizard extends Component
{
    public $cars;
    public $currentStep = 1;
    public $civilite, $nom_plaignant, $prenoms_plaignant, $date_plaignant, $lieu_plaignant;
    public $adresse_geo, $tel1_plaignant, $tel2_plaignant, $email, $email_confirmation;
    public $nom_suspect, $prenoms_suspect, $pseudo_suspect, $domicile_suspect, $contact_suspect;
    public $objet, $date_prejudice, $detaille_prejudice;
    public $successMessage = '';

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function mount()
    {
        // $this->cars = Plainte::all();
        // return view('dashboard', compact('cars'));
    }
    public function render()
    {
        return view('livewire.form.wizard');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'civilite' => ['required', Rule::in(['M.', 'Mlle', 'Mme'])],
            'nom_plaignant' => ['required', 'max:10'],
            'prenoms_plaignant' => ['required', 'max:30'],
            'date_plaignant' => ['required', 'date'],
            'lieu_plaignant' => ['required', 'max:50'],
            'adresse_geo' => ['required'],
            'tel1_plaignant' => ['required'],
            'tel2_plaignant' => ['nullable'],
            'email' => ['required', 'email', 'confirmed'],
            'email_confirmation' => ['required', 'email'],
        ]);

        $this->currentStep = 2;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'nom_suspect' => ['max:10', 'nullable'],
            'prenoms_suspect' => ['max:30', 'nullable'],
            'pseudo_suspect' => ['max:20', 'nullable'],
            'domicile_suspect' => ['nullable'],
            'contact_suspect' => ['nullable'],
        ]);

        $this->currentStep = 3;
    }



    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        $validatedData = $this->validate([
            'objet' => ['required'],
            'date_prejudice' => ['required', 'date'],
            'detaille_prejudice' => ['required'],
        ]);

        $plaignant = Plaignant::create([
            'civilite' => $this->civilite,
            'nom' => $this->nom_plaignant,
            'prenoms' => $this->prenoms_plaignant,
            'date_naiss' => $this->date_plaignant,
            'lieu_naiss' => $this->lieu_plaignant,
            'address_geo' => $this->adresse_geo,
            'num_phone1' => $this->tel1_plaignant,
            'num_phone2' => $this->tel2_plaignant,
            'email' => $this->email,
        ]);

        $password = code($this->nom_plaignant);

        User::create([
            'plaignant_id' => $plaignant->id,
            'name' => $this->nom_plaignant,
            'email' => $this->email,
            'password' => Hash::make('00000000'),
        ]);

        Plainte::create([
            'plaignant_id' => $plaignant->id,
            'numéro_rp' => numrp(),
            'objet' => $this->objet,
            'date_prejudice' => $this->date_prejudice,
            'detaille_prejudice' => $this->detaille_prejudice,
            'nom_susp' => $this->nom_suspect,
            'prenom_susp' => $this->prenoms_suspect,
            'pseudo_susp' => $this->pseudo_suspect,
            'docimile_susp' => $this->domicile_suspect,
            'contact_susp' => $this->contact_suspect,
        ]);

        $this->successMessage = 'Votre plainte a été enregistrée avec succès vous devez le confirmer avec l\'email que vous allez';

        $this->clearForm();

        $this->currentStep = 1;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->civilite = '';
        $this->nom_plaignant = '';
        $this->prenoms_plaignant = '';
        $this->date_plaignant = '';
        $this->lieu_plaignant = '';
        $this->adresse_geo = '';
        $this->tel1_plaignant = '';
        $this->tel2_plaignant = '';
        $this->email = '';
        $this->email_confirmation = '';
        $this->nom_suspect = '';
        $this->prenoms_suspect = '';
        $this->pseudo_suspect = '';
        $this->domicile_suspect = '';
        $this->contact_suspect = '';
        $this->objet = '';
        $this->date_prejudice = '';
        $this->detaille_prejudice = '';
    }
}
