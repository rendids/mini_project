<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckProfileMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user && $user->penyedia && $user->penyedia->status === 'profilelengkap') {
            return $next($request);
        }

        return redirect()->route('profile.penyedia');

    }

    // app/Http/Middleware/CheckProfileMiddleware.php

}

        // Memeriksa apakah user memiliki profil terkait dan status profil sudah selesai

