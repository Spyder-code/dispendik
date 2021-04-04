<?php

namespace App\Providers;
use App\Models\Book;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['teachers.fields'], function ($view) {
            $bookItems = Book::pluck('title','id')->toArray();
            $view->with('bookItems', $bookItems);
        });
        View::composer(['teachers.fields'], function ($view) {
            $bookItems = Book::pluck('title','id')->toArray();
            $view->with('bookItems', $bookItems);
        });
        View::composer(['teachers.fields'], function ($view) {
            $bookItems = Book::pluck('title','id')->toArray();
            $view->with('bookItems', $bookItems);
        });
        View::composer(['teachers.fields'], function ($view) {
            $bookItems = Book::pluck('title','id')->toArray();
            $view->with('bookItems', $bookItems);
        });
        View::composer(['teachers.fields'], function ($view) {
            $bookItems = Book::pluck('name','id')->toArray();
            $view->with('bookItems', $bookItems);
        });
        //
    }
}