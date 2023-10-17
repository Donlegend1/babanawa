<?php

// ResultType.php

namespace App\Http\Livewire;

use Livewire\Component;

class ResultType extends Component
{
    // Define properties and methods for the second step here

    public function render()
    {
       
        return view('livewire.result-type');
    }

    public function nextStep()
    {
        // Validation and logic for the second step

        $this->emitUp('goToNextStep'); // Emit an event to move to the next step
    }

    public function previousStep()
    {
        // Logic to handle going back to the previous step

        $this->emitUp('goToPreviousStep'); // Emit an event to move to the previous step
    }

}