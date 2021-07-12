<?php

namespace App\Providers;

use App\Http\Controllers\InvestmentController;
use App\Models\Business;
use App\Models\Category;
use App\Models\Chat;
use App\Models\Investment;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Jenssegers\Date\Date;
use Illuminate\Support\ServiceProvider;

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
        Date::setLocale(config('app.locale'));

        view()->composer('search', function ($view) {
            $view->with('categories', Category::all());

        });
        view()->composer('search', function ($view) {
            $view->with('investments',Investment::all());
        });
        view()->composer('search', function ($view) {
            $view->with('businesses',Business::all());
        });


        view()->composer('*', function ($view)
        {
            $messages_count = Chat::where('user_id', auth()->id())->where('read_at',null)->where('type', 1)->count();
            if($messages_count < 1){
                $messages_count = '';
            }
            //...with this variable
            $view->with('messages_count', $messages_count);

        });
    }
}
