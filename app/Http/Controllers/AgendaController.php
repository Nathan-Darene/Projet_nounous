<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AgendaController extends Controller
{
    public function aganda()
    {
        return View('page/caland');
    }

}

