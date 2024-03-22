<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Filament\Resources\PostResource\RelationManagers\AuthorsRelationManager;
use App\Filament\Resources\PostResource\RelationManagers\CommentsRelationManager;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationLabel = 'Articles';

    protected static ?string $modelLabel = 'Articles';

    protected static ?string $navigationGroup = 'System Management';

    protected static ?string $slug = 'articles';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?int $navigationSort = 2;

    // protected static ?int  = 'title';

    // badge on the navbar
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() > 2 ? 'danger' : 'info';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Tabs::make('Create New Post')->tabs([
                //     Tab::make('Tab 1')->icon('heroicon-o-clipboard-document-list')->activeTab()->schema([
                //         Forms\Components\Section::make('Post Information')
                //             // ->description('The Content of Contact message.')
                //             ->schema([
                //                 Forms\Components\TextInput::make('title')
                //                     ->required()
                //                     ->rules(['min:3', 'max:50']),
                //                 Forms\Components\TextInput::make('slug')
                //                     ->required()
                //                     ->unique(ignoreRecord: true)
                //                     ->maxLength(255),
                //                 Forms\Components\ColorPicker::make('color')
                //                     ->required(),
                //                 Forms\Components\TagsInput::make('tags')
                //                     ->required(),
                //                 Forms\Components\Select::make('authors')
                //                     ->relationship('authors', 'name')
                //                     ->multiple()
                //                     ->searchable()
                //                     ->native(false)
                //                     ->preload()
                //                     ->required(),
                //                 Forms\Components\Select::make('category_id')
                //                     ->relationship(name: 'category', titleAttribute: 'name')
                //                     ->searchable()
                //                     ->native(false)
                //                     ->preload()
                //                     ->required(),
                //             ])
                //     ]),
                //     Tab::make('Tab 2')->schema([
                //         Forms\Components\Section::make('Post Information')
                //             // ->description('The Content of Contact message.')
                //             ->schema([
                //                 Forms\Components\Section::make('Post Information')
                //                     // ->description('The Content of Contact message.')
                //                     ->schema([


                //                         Forms\Components\FileUpload::make('thumbnail')
                //                             ->disk('public')
                //                             ->directory('thumbnails')
                //                             ->required(),
                //                         Forms\Components\MarkdownEditor::make('content')
                //                             ->columnSpanFull(),
                //                         Forms\Components\Checkbox::make('published')
                //                             ->default(0),
                //                     ])->columns(2)
                //             ])
                //     ]),
                // ]),
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
                        Forms\Components\Select::make('authors')
                            ->relationship('authors', 'name')
                            ->multiple()
                            ->searchable()
                            ->native(false)
                            ->preload()
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

    public static function table(Table $table): Table
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
                    ->badge()
                    ->color(function (string $state): string {
                        return 'info';
                    })
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
                    SelectFilter::make('Category')
                        ->relationship('category', 'name')
                        ->searchable()
                        ->preload()
                        ->multiple()
                        ->label('Filter by Category')
                        ->indicator('Category'),
                    // Filter::make('Published Posts')
                    //     ->label('Published Posts')
                    //     ->query(function (Builder $query) {
                    //         $query->where('published', true);
                    //     }),
                    TernaryFilter::make('published'),
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
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            AuthorsRelationManager::class,
            CommentsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}