<?php

use App\Livewire\Home;
use App\Livewire\Pages\AboutPage;
use App\Livewire\Pages\ContactPage;
use App\Livewire\Pages\SpeakersPage;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::get('/sobre', AboutPage::class)->name('about');
Route::get('/palestrantes', SpeakersPage::class)->name('speakers');
Route::get('/contacto', ContactPage::class)->name('contact');
