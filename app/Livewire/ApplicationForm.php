<?php

namespace App\Livewire;

use App\Models\Application;
use App\Models\Department;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class ApplicationForm extends Component
{
    use WithFileUploads;

    #[Rule('max:2048', message: 'Upload correct pdf document which is not greater than 2 MB.')]
    #[Rule('mimes:pdf', message: 'Pdf document are allowed type of document only')]
    public $document = '';

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

        $name = uniqid().'_'.trim($this->document->getClientOriginalName());

        $application = Application::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'department_id' => $this->department_id,
            'type' => $this->type,
            'biography' => $this->biography,
        ]);
        $application->addMedia($this->document->getRealPath())
            ->usingFileName($name)
            ->toMediaCollection('documents');
        $this->reset();

    }

    public function render()
    {
        $departments = Department::all();

        return view('livewire.application-form', ['departments' => $departments]);
    }
}
