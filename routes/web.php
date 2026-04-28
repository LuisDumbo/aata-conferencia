<?php

use App\Livewire\Home;
use App\Livewire\Pages\AboutPage;
use App\Livewire\Pages\ContactPage;
use App\Livewire\Pages\CountriesPage;
use App\Livewire\Pages\ModeradoresPage;
use App\Livewire\Pages\Moderadores\Show as ModeradoresShow;
use App\Livewire\Pages\PartnersPage;
use App\Livewire\Pages\RegistrationPage;
use App\Livewire\Pages\SchedulePage;
use App\Livewire\Pages\StayPage;
use App\Livewire\Pages\Speakers\Show;
use App\Livewire\Pages\SpeakersPage;
use Illuminate\Support\Facades\Route;

Route::get('/lang/{lang}', function (string $lang) {
    if (in_array($lang, ['pt', 'en'])) {
        session(['lang' => $lang]);
    }
    return redirect()->back();
})->name('lang.switch');

Route::get('/', Home::class)->name('home');

Route::get('/sobre', AboutPage::class)->name('about');
Route::get('/programa', SchedulePage::class)->name('schedule');
Route::get('/hoteis-e-alojamentos', StayPage::class)->name('hotels');
Route::get('/palestrantes', SpeakersPage::class)->name('speakers');
Route::get('/palestrantes/{slug}', Show::class)->name('speakers.show');
Route::get('/moderadores', ModeradoresPage::class)->name('moderadores');
Route::get('/moderadores/{slug}', ModeradoresShow::class)->name('moderadores.show');
Route::get('/contacto', ContactPage::class)->name('contact');
Route::get('/parceiros', PartnersPage::class)->name('partners');
Route::get('/paises-isentos', CountriesPage::class)->name('countries');
Route::get('/inscricao', RegistrationPage::class)->name('registration');
