<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicationResource\Pages;
use App\Models\Application;
use App\Models\Enum\ApplicationStatus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'Applications';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\Select::make('department_id')
                    ->relationship('department', 'name')
                    ->native(false)
                   
                    ->placeholder('Select department.')
                ->searchable()
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
                Forms\Components\Select::make('status')
                    ->options(ApplicationStatus::class)
                    ->native(false)
                    ->reactive()
                    ->required(),
                Forms\Components\DatePicker::make('interview_date'),
                Forms\Components\Textarea::make('interview_notes')
                    ->columnSpanFull(),
                ])->columns(3),
                
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('status')
                    ->sortable()
                    ->badge()
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListApplications::route('/'),
            'create' => Pages\CreateApplication::route('/create'),
            'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }
}
