<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\inertia;

class IndexController extends Controller
{
    //
    public function home() {
        return inertia::render('Home');
    }
}
