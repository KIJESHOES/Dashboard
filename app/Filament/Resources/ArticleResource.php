<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Judul')
                ->placeholder('Masukkan judul artikel')
                ->required(),
                TextInput::make('content')
                ->label('Konten')
                ->placeholder('Masukkan konten artikel')
                ->required(),
                TextInput::make('author')
                ->label('Penulis')
                ->placeholder('Masukkan nama penulis')
                ->required(),
                TextInput::make('link')
                ->label('Link')
                ->placeholder('Masukkan link artikel')
                ->required(),
                Select::make('category')
                    ->label('Kategori')
                    ->required()
                    ->placeholder('Pilih kategori artikel')
                    ->options([
                        'Obat' => 'Obat',
                        'Pangan' => 'Pangan',
                        'Kosmetik' => 'Kosmetik',
                        'Obat Tradisional' => 'Obat Tradisional',
                        'Suplemen Kesehatan' => 'Suplemen Kesehatan',
                        'Materi FKP' => 'Materi FKP',
                    ])
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                TextColumn::make('title')->label('Judul')
                ->searchable(),
                TextColumn::make('content')->label('Kontent'),
                TextColumn::make('author')->label('Penulis'),
                TextColumn::make('link'),
                TextColumn::make('category')->label('Kategori'),

            ])
            ->filters([
                //
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
            'view' => Pages\ViewArticle::route('/{record}'),
        ];
    }
}
