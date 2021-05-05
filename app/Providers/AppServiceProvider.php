<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $sidebarItems = [
            [
                'label' => 'Dashboard',
                'route' => 'dashboard',
                'icon' => 'zondicon-dashboard',
            ],
            [
                'icon' => 'heroicon-o-user',
                'label' => 'Profile',
                'route' => 'profile.show'
            ],
            [
                'icon' => 'heroicon-o-key',
                'label' => 'API Tokens',
                'route' => 'api-tokens.index'
            ]
        ];

        View::share('sidebar',  ['items' => $sidebarItems]);
    }

    public function boot()
    {
        //
    }
}
