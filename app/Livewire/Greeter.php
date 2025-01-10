<?php

namespace App\Livewire;

use App\Models\Greeting;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Greeter extends Component
{   
    #[Validate('required|min:2')]
    public $name = '';

    public $greeting = '';
    public $greetings = '';
    public $greetingmessage = '';
    
    public function changeGreeting()
    {
        $this->reset('greetingmessage');
        $this->validate();

        $this->greetingmessage = "{$this->greeting} {$this->name}!";

    }

    public function mount()
    {
        $this->greetings = Greeting::all();
    }

    // public function rules()
    // {
    //     return [
    //         'name' => 'required|min:2',
    //         'greeting' => 'required',
            
    //     ];
    // }

    public function updated($property, $value)
    {
        if ($property == 'name') {
            $this->name = strtolower($value);
        }
    }

    public function updatedName($value)
    {
        $this->name = strtolower($value);
    }

    public function render()
    {
        return view('livewire.greeter');
    }
}
