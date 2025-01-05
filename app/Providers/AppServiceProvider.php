<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('captcha_match', function ($attribute, $value, $parameters, $validator) {
            return session('captcha_phrase') === $value;
        });

        Validator::replacer('captcha_match', function ($message, $attribute, $rule, $parameters) {
            return 'Captcha does not match.';
        });
    }
}
