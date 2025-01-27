<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Config as ConfigModel;

class isMaintaince
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Jika user adalah admin, izinkan
        if (auth()->check() && auth()->user()->role == 'admin') {
            return $next($request);
        }

        // Ambil konfigurasi maintaince
        $config = ConfigModel::where('name', 'maintaince')->first();
        $isMaintaince = $config ? intval($config->value) : 0;

        // Jika mode maintaince aktif, tampilkan error 503
        if ($isMaintaince == 1) {
            abort(503);
        }

        // Lanjutkan permintaan
        return $next($request);
    }
}
