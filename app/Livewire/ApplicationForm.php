<?php

namespace App\Livewire;

use App\Models\Application;
use App\Models\Department;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ApplicationForm extends Component
{
    #[Rule('required', message: 'Yoo write both names')]
    #[Rule('min:5', message: 'Come on those names are too short!')]
    public $name = '';

    #[Rule('required', message: 'Come on provide email')]
    #[Rule('email', message: 'Yoo write proper email')]
    public $email = '';

    #[Rule('required', message: 'Yoo provide mobile number')]
    #[Rule('regex:/^(\\+250|0)[0-9]{8,9}$/', message: 'Come on provide correct phone number!')]
    public $phone = '';

    #[Rule('required', message: 'Yoo choose the department you want to work in.')]
    public $department_id = '';

    #[Rule('required', message: 'Yoo select type of application you are making.')]
    public $type = '';

    #[Rule('required', message: 'Provide some background information about you.')]
    #[Rule('min:120', message: 'Yoo provide like 120 words about you.')]
    public $biography = '';

    public $showSuccessIndicator = false;

    public function apply()
    {
        $this->validate();
        Application::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'department_id' => $this->department_id,
            'type' => $this->type,
            'biography' => $this->biography,
        ]);
        $this->reset();
        $this->showSuccessIndicator = true;
    }

    public function render()
    {
        $departments = Department::all();

        return view('livewire.application-form', ['departments' => $departments]);
    }
}
