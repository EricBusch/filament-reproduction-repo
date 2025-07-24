<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required(),
                TextInput::make('slug')->required(),
                Textarea::make('body')->required()->columnSpanFull(),
                FileUpload::make('featured_image')->multiple()->maxFiles(2),
                ToggleButtons::make('status')
                             ->required()
                             ->grouped()
                             ->default('draft')
                             ->options([
                                 'draft'     => 'Draft',
                                 'published' => 'Published',
                             ]),
            ]);
    }
}
