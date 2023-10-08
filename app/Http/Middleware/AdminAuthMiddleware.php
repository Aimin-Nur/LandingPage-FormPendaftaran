<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class AdminAuthMiddleware
// {
//     public function handle(Request $request, Closure $next)
//     {
//         // Periksa apakah pengguna sudah login sebagai admin
//         if (!Auth::guard('bos')->check()) {
//             return redirect('/admin/login'); // Redirect ke halaman login jika belum login
//         }

//         return $next($request);
//     }
// }
