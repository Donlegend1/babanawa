<?php

// MultiStepForm.php

namespace App\Http\Livewire;

use Livewire\Component;

class MultiStepForm extends Component
{
    public $currentStep = 1;
    protected $listeners = ['goToNextStep', 'goToPreviousStep'];

    public function goToNextStep()
    {
       
        $this->currentStep++;
       
    }

    public function goToPreviousStep()
    {
        $this->currentStep--;
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }

}