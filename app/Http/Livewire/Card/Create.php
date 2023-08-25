<?php

namespace App\Http\Livewire\Card;

use App\Models\Card;
use Livewire\Component;

class Create extends Component
{
    public string $name;
    public string $colour;
    public string $cost;
    public string $description;
    public Card $newCard;

    protected $rules = [

        'name' => 'required|min:1|max:255',

        'colour' => 'required|max:1',

        'cost' => 'required|min:1|max:255',

        'description' => 'required|min:1'

    ];

    public function mount()
    {
        $this->name = "";
        $this->colour = "";
        $this->cost = "";
        $this->description = "";
    }

    public function create()
    {
        $this->newCard = new Card();
        $this->validate();
        $this->newCard->name = $this->name;
        $this->newCard->colour = $this->colour;
        $this->newCard->cost = $this->cost;
        $this->newCard->description = $this->description;
        $this->newCard->save();
        session()->flash('message', 'Card successfully created');
    }
    public function render()
    {
        return view('livewire.card.create');
    }
}
