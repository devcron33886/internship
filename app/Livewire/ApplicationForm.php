<?php

namespace App\Livewire;

use App\Models\Application;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Livewire\Component;

class ApplicationForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\Select::make('department_id')
                        ->relationship('department', 'name')
                        ->native(false)
                        ->placeholder('Select department.')
                        
                        ->required(),
                    Forms\Components\TextInput::make('name')
                        ->placeholder('Enter your both names')
                        ->required(),
                    Forms\Components\TextInput::make('email')
                        ->email()
                        ->placeholder('Enter your email we can reach out to you.')
                        ->required(),
                    Forms\Components\TextInput::make('phone')
                        ->placeholder('Enter your phone we can reach out to you.')
                        ->required(),
                    Forms\Components\FileUpload::make('cover_letter')
                        ->label('Upload your cover letter.')
                        ->required(),
                    Forms\Components\FileUpload::make('resume')
                        ->label('Upload your resume.')
                        ->required(),
                    Forms\Components\Select::make('type')
                        ->options(['Internship', 'Volunteering'])
                        ->native(false)
                        ->required(),
                ])->columns(2),
            ])->statePath('data')
            ->model(Application::class);
    }

    public function create(): void
    {
        $data = $this->form->getState();
        $application = Application::create($data);
        $this->form->model($application)->saveRelationships();

        Notification::make()
            ->title('Application created')
            ->success()
            ->send();

        $this->form->fill();

    }

    public function render()
    {
        return view('livewire.application-form');
    }
}
