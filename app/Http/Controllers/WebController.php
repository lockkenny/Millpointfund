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

    public function insights1() {
        return view('insights1');
    }

    public function insights2() {
        return view('insights2');
    }

    public function terms() {
        return view('terms');
    }
}