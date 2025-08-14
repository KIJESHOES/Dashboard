<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\BulkActionGroup;
use Illuminate\Http\Request;


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
                    ->label('Link PDF Google Drive')
                    ->placeholder('Masukkan link share Google Drive')
                    ->required()
                    ->afterStateUpdated(function ($state, callable $set) {
                        if (preg_match('/\/d\/(.*?)\//', $state, $matches)) {
                            $fileId = $matches[1];
                            $set('link', "https://drive.google.com/file/d/{$fileId}/preview");
                        }
                    }),
                Select::make('category_id')
                    ->label('Kategori')
                    ->required()
                    ->placeholder('Pilih kategori artikel')
                    ->options(Category::pluck('name', 'id'))
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                TextColumn::make('title')->label('Judul')
                    ->searchable()
                    ->limit(50)
                    ->wrap(),
                TextColumn::make('content')->label('Kontent')
                    ->limit(50)
                    ->wrap(),
                TextColumn::make('author')->label('Penulis')
                    ->limit(50)
                    ->wrap(),
                TextColumn::make('link')->label('Link PDF')
                    ->limit(50)
                    ->wrap(),
                TextColumn::make('category.name')->label('Kategori')
                    ->label('Kategori')
                    ->searchable(),


            ])

            ->filters([
                SelectFilter::make('category_id')
                    ->label('Kategori')
                    ->relationship('category', 'name') // Otomatis ambil nama kategori
            ])

            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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