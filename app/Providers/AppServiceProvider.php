<?php

namespace App\Providers;

use App\Model\FrontendMenu as ModelFrontendMenu;
use Illuminate\Support\ServiceProvider;
//use Illuminate\Pagination\Paginator;
//use Illuminate\Support\Facades\Paginator;
use View;
use App\Model\FrontendMenu;

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
        //
        // Paginator::useBootstrap();

        View::composer('*', function ($view) {
            //  $menu = new \App\Model\FrontendMenu;
            $menus = FrontendMenu::with(['childs'])->where('parent_id', '=', 0)->get();
            // $menuList = $menu->tree();
            //  $allMenus = FrontendMenu::pluck('title_en', 'id',)->all();
            //$allMenus = $menuList::pluck('title_en', 'id')->all();
            // dd($menus->toArray());
            $navbars = FrontendMenu::select('title_en', 'url_link')->orderBy('sort_order')->get();
            // dd($navbars);
            $view->with('navbars', $navbars);
        });
    }
}
