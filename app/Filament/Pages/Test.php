<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Test extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.test';

    public function getListeners(): array
    {
        return [
            "echo-private:App.Properties,TrainingEvent" => 'notifyTrainingEvent',
        ];
    }
}
