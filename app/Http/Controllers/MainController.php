<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function apparts() {
        return view('pages.apparts');
    }

    public function pk10() {
        return view('pages.apparts');
    }

    public function caboma() {
        return view('pages.apparts');
    }

    public function conferences() {
        return view('pages.conferences');
    }

    public function gymFitness() {
        return view('pages.gymFitness');
    }

    public function contacts() {
        return view('pages.contacts');
    }

    public function room($room) {
        return view('pages.roomDetails', compact('room'));
    }
}
