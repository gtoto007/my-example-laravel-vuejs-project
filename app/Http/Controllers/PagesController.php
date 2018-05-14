<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage() {
        return view('home');
    }

    public function apply() {
        return view('apply');
    }

    public function postApply() {

    }
}
