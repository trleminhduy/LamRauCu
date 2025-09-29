<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Nếu chưa đăng nhập bằng guard web
        if (!Auth::guard('web')->check()) {
            toastr()->error('Bạn cần đăng nhập để thực hiện hành động này');
            return redirect()->route('login');
        }

        return $next($request);
    }

    //Khi làm xong middleware phải đăng ký bằng cách vào app-> bootstrap
}
