<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CommonVariableProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }


    public function boot(): void
    {
        $data = [
            'name'      => 'Mridul Kar',
            'profession' => 'Software Developer',
        ];

        View::share('common_variable', $data);
        // view()->share('common_variable', $data);
    }
}
