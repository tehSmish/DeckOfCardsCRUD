<?php

namespace App\Http\Livewire\Card;

use App\Models\Card;
use Illuminate\Support\Collection;
use Livewire\Component;

class View extends Component
{
    public Collection $cards;
    public string | null $search;
    public function mount()
    {
        $this->search = null;
    }
    public function render()
    {
        if($this->search)
        {
            $this->cards = Card::where('name', 'LIKE', '%' . $this->search . '%')->get();
        }
        else
        {
            $this->cards = Card::all();
        }
        return view('livewire.card.view');
    }
}
