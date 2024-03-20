<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostsRelationManager extends RelationManager
{
    protected static string $relationship = 'posts';


    public  function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Post Information')
                    // ->description('The Content of Contact message.')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->rules(['min:3', 'max:50']),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        Forms\Components\ColorPicker::make('color')
                            ->required(),
                        Forms\Components\TagsInput::make('tags')
                            ->required(),
                        Forms\Components\Select::make('category_id')
                            ->relationship(name: 'category', titleAttribute: 'name')
                            ->searchable()
                            ->native(false)
                            ->preload()
                            ->required(),
                        Forms\Components\FileUpload::make('thumbnail')
                            ->disk('public')
                            ->directory('thumbnails')
                            ->required(),
                        Forms\Components\MarkdownEditor::make('content')
                            ->columnSpanFull(),
                        Forms\Components\Checkbox::make('published')
                            ->default(0),
                    ])->columns(2)
            ]);
    }

    public  function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ColorColumn::make('color')
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('category.name')
                    ->numeric()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\CheckboxColumn::make('published')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Published on')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters(
                [
                    Filter::make('created_at')
                        ->form([
                            DatePicker::make('created_from'),
                            DatePicker::make('created_until'),
                        ])
                        ->query(function (Builder $query, array $data): Builder {
                            return $query
                                ->when(
                                    $data['created_from'],
                                    fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                                )
                                ->when(
                                    $data['created_until'],
                                    fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                                );
                        })
                    // ->columnSpan(2)->columns(2)
                ],
                // layout: FiltersLayout::AboveContent
            )
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
