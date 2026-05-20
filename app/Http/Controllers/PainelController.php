<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    /**
     * Mostra o painel financeiro.
     */
    public function index()
    {
        // Aqui você poderia pegar dados do banco, mas por enquanto vamos só mostrar a view
        return view('painel-financeiro');
    }
}