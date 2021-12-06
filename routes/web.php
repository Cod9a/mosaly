<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ContactController;

//Définir la langue courante
Route::get('/language/{locale}', [LocalizationController::class, 'setLocal'])->name('setLocal');

//Page d'accueil
Route::get('/', [MainController::class, 'index'])->name('index');

//Page appartements
Route::get('/appartements', [MainController::class, 'apparts'])->name('apparts');

//Résidence CABOMA
Route::get('/residence-caboma', [MainController::class, 'caboma'])->name('caboma');

//Hôtel PK10
Route::get('/hotel-pk10', [MainController::class, 'pk10'])->name('pk10');

//Page conferences
Route::get('/conferences', [MainController::class, 'conferences'])->name('conferences');

//Page gym & fitness
Route::get('/gym-fitness', [MainController::class, 'gymFitness'])->name('gymFitness');

//Page contacts
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');

//Envoi du message
Route::post('/contacts', [ContactController::class, 'sendContact'])->name('sendContact');

//Page détails chambre
Route::get('/chambres/{room}', [MainController::class, 'room'])->name('room');
