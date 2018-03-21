<?php

namespace App\Http\Controllers;

class CreditsController extends Controller
{
    public function index()
    {
        return view('billing.credits.index');
    }
}
