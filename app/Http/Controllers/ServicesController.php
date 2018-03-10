<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Support\Facades\Auth;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $services = Service::byUser(Auth::user())->get();

        return view('services.index', [
            'services' => $services,
        ]);
    }
}
