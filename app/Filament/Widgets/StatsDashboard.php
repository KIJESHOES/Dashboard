<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Article;
use App\Models\Category;
use App\Models\Visit;
use Illuminate\Support\Facades\DB;

class StatsDashboard extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Visitors', number_format(Visit::count())),
            Card::make('Total Articles', number_format(Article::count())),
            Card::make('Total Categories', number_format(Category::count())),
            Card::make('Top Category by Articles', $this->getTopCategory()),
            Card::make('Most Viewed Article', $this->getMostViewedArticle()),
        ];
    }

    private function getTopCategory(): string
    {
        $category = Category::select('categories.name', DB::raw('COUNT(articles.id) as total'))
            ->leftJoin('articles', 'categories.id', '=', 'articles.category_id')
            ->groupBy('categories.id', 'categories.name')
            ->orderByDesc('total')
            ->first();

        return $category ? "{$category->name} ({$category->total})" : 'No data';
    }

    private function getMostViewedArticle(): string
    {
        $article = Article::select('articles.title', DB::raw('COUNT(visits.id) as total'))
            ->leftJoin('visits', function ($join) {
                $join->on('articles.id', '=', 'visits.page_id')
                    ->where('visits.page_type', 'article');
            })
            ->groupBy('articles.id', 'articles.title')
            ->orderByDesc('total')
            ->first();

        return $article ? "{$article->title} ({$article->total} views)" : 'No data';
    }

    public static function getWidgets(): array
    {
        return [
            self::class, // Stats utama
            ArticlesPerCategoryChart::class, // Chart di paling bawah
        ];
    }
}
