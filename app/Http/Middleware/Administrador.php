<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Import Log Facade

class Administrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            Log::info('User is authenticated', [
                'user_id' => Auth::id(), 
                'roles' => Auth::user()->getRoleNames()
            ]);
            
            if (Auth::user()->hasRole('admin')) {
                return $next($request);
            }
        }

        Log::warning('User is not an admin', ['user_id' => Auth::id()]);
        
        return redirect('/'); 
    }
}
