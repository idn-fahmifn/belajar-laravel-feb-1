<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UmurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $nama = $request->session()->get('nama');
        $umur = $request->session()->get('umur');
        if($nama == 'fahmi' && $umur >= 18){
            return $next($request);
        }
        // handle jika kurang dari 18 tahun.
        return redirect()->route('form-umur')->with('gagal', 'Cek kembali nama dan umurnya.');
    }
}
