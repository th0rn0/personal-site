<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

use Auth;
use Canvas\Tag;
use Canvas\Post;
use Canvas\Topic;
use Canvas\UserMeta;
use Illuminate\Support\Str;

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
        Schema::defaultStringLength(191);
        if(config('app.env') === 'production' || config('app.env') === 'staging') {
            \URL::forceScheme('https');
        }
        view()->composer('layouts.app', function ($view) {
            $metaData = UserMeta::forCurrentUser()->first();
            $emailHash = md5(trim(Str::lower(optional(request()->user())->email)));
            $data = [
                'avatar' => optional($metaData)->avatar && !empty(optional($metaData)->avatar) ? $metaData->avatar : "https://secure.gravatar.com/avatar/{$emailHash}?s=500",
                'posts'  => Post::published()->orderByDesc('published_at')->simplePaginate(10),
                'topics' => Topic::all(['name', 'slug']),
                'tags'   => Tag::all(['name', 'slug']),
            ];
            $view->with(compact('data'));
        });
    }
}


       