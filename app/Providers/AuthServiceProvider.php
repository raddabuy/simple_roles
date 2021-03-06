<?php

namespace App\Providers;

use App\Models\Article;
use App\Policies\ArticlePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

//use Illuminate\Contracts\Auth\Access\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Article::class  => ArticlePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('publish-articles', function ($user) {
            return $user->is_admin || $user->is_publisher;
        });

        Gate::define('manage-categories', function ($user) {
            return $user->is_admin;
        });

        Gate::define('see-article-user', function ($user) {
            return $user->is_admin;
        });
    }
}

