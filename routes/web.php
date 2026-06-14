<?php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/language/{locale}', function ($locale) {

    if (in_array($locale, ['en', 'fa', 'ps'])) {
        Session::put('locale', $locale);
    }

    return redirect()->back();
})->name('language.switch');

// Route::get('/dashboard', function() {
//     return view('dashboard');
// });