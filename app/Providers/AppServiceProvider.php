<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Model::preventLazyLoading(!app()->isProduction());

        $this->bootEloquentMorphsRelations();
    }

    public function bootEloquentMorphsRelations()
    {
        Relation::morphMap([
            Post::TABLE       => Post::class,
            Comment::TABLE    => Comment::class,
            User::TABLE       => User::class,
            Tag::TABLE        => Tag::class,
        ]);
    }
}
