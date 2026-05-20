<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon; // Biblioteca para lidar com datas e horas

class CheckBusinessHours
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Pegando a hora atual do servidor
        $now = Carbon::now();
        $hour = $now->hour; // retorna hora no formato 0-23

        // Definindo horário comercial: 08:00 às 18:00
        if ($hour < 8 || $hour >= 18) {
            // Se estiver fora do horário, redireciona para uma página de aviso
            return redirect()->route('outside-hours');
        }

        // Se estiver dentro do horário, continua a requisição normalmente
        return $next($request);
    }
}