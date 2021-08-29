<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class WebController extends controller {
    public function index() {
        return view('welcome');
    }

    public function operations() {
        return view('operations');
    }

    public function insights() {
        return view('insights');
    }

    public function terms() {
        return view('terms');
    }
}