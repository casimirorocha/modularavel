<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/auth/login');

Route::get('/auth/dashboard', function () {
    return view('auth::dashboard', [
        'title' => __('Dashboard'),
        'users' => [
            'https://daddybrasilapp.test/img?user=brendasusin&file=avatar_big_516321_1606843182.jpg&w=250&h=300&size=small&q=95',
            'https://daddybrasilapp.test/img?user=Maria_alicy&file=avatar_big_490398_1605546338.jpg&w=250&h=300&size=small&q=95',
            'https://daddybrasilapp.test/img?user=Lunababybhh&file=avatar_big_488175_1605251018.jpg&w=250&h=300&size=small&q=95',
            'https://daddybrasilapp.test/img?user=Bhababy&file=avatar_big_517007_1606850260.jpg&w=250&h=300&size=small&q=95',
        ],
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/auth/new', function () {
    return view('auth::dashboard', [
        'title' => __('New Users'),
        'users' => [
            'https://laradate.test/img/uploads/hqVVZPdzpfHyFpq1P9pwNDH0PsAYuw81zhbNURbJ.jpg?p=small&s=9aadae67cb99844c880d58726fcf0ddd',
            'https://laradate.test/img/uploads/smjsRRjHVePGEVehptA2dZEOeSRzTMciq4UjTxJN.jpg?p=small&s=c07be62235aab9eeca05c1ecd6f9f74a',
            'https://laradate.test/img/uploads/z9BS6unnOtvnZ978pgqxVWTQYycbTN6bmhjBmw5Z.jpg?p=small&s=92399eb89f21f0c2c57d5cdb683e0bff',
            'https://laradate.test/img/uploads/KZOcMmETBZiUV4kpat4JQuGgFYyx8yn2wJf6baIn.jpg?p=small&s=5edc0a54e3eaa2d437532544baf9acd8',
        ],
    ]);
})->middleware(['auth', 'verified'])->name('new.users');

Route::get('/auth/search', function () {
    return view('auth::dashboard', [
        'title' => __('Search Users'),
        'users' => [
            'https://daddybrasilapp.test/img?user=Danibernarr&file=avatar_big_515478_1607104630.jpg&w=250&h=300&size=small&q=95',
            'https://daddybrasilapp.test/img?user=Moniquesilva1&file=avatar_big_516538_1606845068.jpg&w=250&h=300&size=small&q=95',
            'https://daddybrasilapp.test/img?user=Elabel25&file=avatar_big_517872_1606860895.jpg&w=250&h=300&size=small&q=95',
        ],
    ]);
})->middleware(['auth', 'verified'])->name('search.users');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
