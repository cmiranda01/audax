<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ContratoController extends Controller
{
    public function index()
    {
        $contratos = Contrato::with('user');
        $users = User::all();

        $user_id = request()->input('user_id');
        if ($user_id) {
            $contratos->where('id_cliente',$user_id);
        }
      
        
        return view('contratos', ['contratos' => $contratos->paginate(), 'users' => $users]);
    }
}
