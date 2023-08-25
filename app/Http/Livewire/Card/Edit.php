<?php

namespace App\Http\Livewire\Card;

use App\Models\Card;
use Livewire\Component;

class Edit extends Component
{

    public string $name;
    public string $colour;
    public string $cost;
    public string $description;
    public Card | null $editCard;

    protected $rules = [

        'name' => 'required|min:1|max:255',

        'colour' => 'required|max:1',

        'cost' => 'required|min:1|max:255',

        'description' => 'required|min:1'

    ];

    public function mount($cardId)
    {
        $this->editCard = Card::where('id', $cardId)->first();
        if ($this->editCard)
        {
            $this->name = $this->editCard->name;
            $this->colour = $this->editCard->colour;
            $this->cost = $this->editCard->cost;
            $this->description = $this->editCard->description;
        }
        else
        {
            return abort(404);
        }
    }
    public function save()
    {
        $this->validate();
        $this->editCard->name = $this->name;
        $this->editCard->colour = $this->colour;
        $this->editCard->cost = $this->cost;
        $this->editCard->description = $this->description;
        $this->editCard->save();
        session()->flash('message', 'Card successfully updated');
    }
    public function render()
    {
        return view('livewire.card.edit');
    }
}
