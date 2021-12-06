<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function setLocal($locale = null) {
        $locale != 'en' || !isset($locale) ? $locale = 'fr' : '';
        \App::setLocale($locale);
        \Session::put('locale', $locale);
        $message = \App::isLocale('fr') ? "La langue par défaut est le français" : "The default language is english";
        return back()->with('success', $message);
    }
}

