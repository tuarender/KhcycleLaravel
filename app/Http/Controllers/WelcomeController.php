<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        return View('layouts.default');
    }
}
