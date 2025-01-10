<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Greeter extends Component
{   
    #[Validate('required|min:2')]
    public $name = '';

    public $greeting = '';
    public $greetingmessage = '';
    
    public function changeGreeting()
    {
        $this->reset('greetingmessage');
        $this->validate();

        $this->greetingmessage = "{$this->greeting} {$this->name}!";

    }

    // public function rules()
    // {
    //     return [
    //         'name' => 'required|min:2',
    //         'greeting' => 'required',
            
    //     ];
    // }

    public function render()
    {
        return view('livewire.greeter');
    }
}
