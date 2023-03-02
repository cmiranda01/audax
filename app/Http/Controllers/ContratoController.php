<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\User;

class ContratoController extends Controller
{
    public function index()
    {
        $contratos = Contrato::paginate();
        return view('contratos', ['contratos' => $contratos]);
    }
    
}
