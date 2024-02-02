<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactCreate extends Component
{
    public $data;
    public function mount($contacts)
    {
        $this->data = $contacts;
    }
    public function render()
    {
        return view('livewire.contact-create', [
            "data" => $this->data,
        ]);
    }
}
