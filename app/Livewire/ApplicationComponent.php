<?php

namespace App\Livewire;

use App\Models\Application;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Livewire\Component;

class ApplicationComponent extends Component implements HasForms
{
    use InteractsWithForms;

    public array $application = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('internship_id')
                    ->relationship('internship', 'title')
                    ->reactive()
                    ->native(false)
                    ->required(),
                TextInput::make('name'),
                TextInput::make('email'),
                TextInput::make('phone'),
                FileUpload::make('resume'),
                FileUpload::make('cover_letter'),
            ])
            ->statePath('application')
            ->model(Application::class);
    }

    public function create(): void
    {
        $application = $this->form->getState();
        $record = Application::create([
            'internship_id' => $application['internship_id'],
            'name' => $application['name'],
            'email' => $application['email'],
            'phone' => $application['phone'],
            'resume' => $application['resume'],
            'cover_letter' => $application['cover_letter'],
        ]);
        $this->form->model($record)->saveRelationships();

        Notification::make()
            ->success()
            ->title('Application created')
            ->body('Application created successfully')
            ->seconds(5)
            ->send();

        $this->form->fill();
    }

    public function render()
    {
        return view('livewire.application-component');
    }
}
