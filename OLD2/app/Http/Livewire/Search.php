<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{

    

    public $search = '';
 
 
    public function render()
    {
        /* 
        return view('search-users', [
            'users' => User::search($this->search),
        ]); 
        */

        return view('livewire.search', [
          //  'users' => User::search($this->search),
        ]);
    }
}
