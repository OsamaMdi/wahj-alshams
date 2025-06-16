<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. التحقق من أن المستخدم مسجل الدخول
        if (!Auth::check()) {
            return redirect()->route('admin.login')
                ->with('error', 'يجب تسجيل الدخول أولاً');
        }

        // 2. التحقق من أن المستخدم لديه دور admin
        if (Auth::user()->role !== 'admin') {
            Auth::logout();
            return redirect()->route('home')
                ->with('error', 'ليس لديك صلاحية الوصول إلى لوحة التحكم');
        }

        // 3. إذا كان كل شيء صحيحاً، اترك الطلب يستمر
        return $next($request);
    }
}
