<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mouvement;
class Historique extends Component
{
    public function render()
    {
        return view('livewire.historique',[
            "mouvements"=>Mouvement::getALL(),
            "references"=>Mouvement::getReferemce(),
        ]);
    }
}
