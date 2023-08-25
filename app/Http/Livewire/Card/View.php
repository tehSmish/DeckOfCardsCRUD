<?php

namespace App\Http\Livewire\Card;

use App\Models\Card;
use Illuminate\Support\Collection;
use Livewire\Component;

class View extends Component
{

    public Collection $cards;
    public function mount()
    {
        $this->cards = Card::all();

    }
    public function render()
    {
        return view('livewire.card.view');
    }
}
