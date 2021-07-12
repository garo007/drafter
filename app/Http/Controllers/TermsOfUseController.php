<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsOfUseController extends Controller
{
    public function index()
    {
        return view('terms_of_use');
    }

    public function terms_of_use_last()
    {
        return view('terms_of_use_last');
    }
}
