<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\Post;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'All'       => Tab::make(),
            'This Week' => Tab::make()->modifyQueryUsing(fn (Builder $query) => $query->where('created_at', '>=', now()->subWeek()))
                ->badge(Post::where('created_at', '>=', now()->subWeek())->count()),
            'This Month' => Tab::make()->modifyQueryUsing(fn (Builder $query) => $query->where('created_at', '>=', now()->subMonth()))
                ->badge(Post::where('created_at', '>=', now()->subMonth())->count()),
            'This Year' => Tab::make()->modifyQueryUsing(fn (Builder $query) => $query->where('created_at', '>=', now()->subYear()))
                ->badge(Post::where('created_at', '>=', now()->subYear())->count()),
            'Published' => Tab::make()->modifyQueryUsing(fn (Builder $query) => $query->where('published', true))
                ->badge(Post::where('published', true)->count()),
            'Un Published' => Tab::make()->modifyQueryUsing(fn (Builder $query) => $query->where('published', false))
                ->badge(Post::where('published', false)->count()),
        ];
    }
}