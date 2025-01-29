<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BlockRestrictedAccess
{
    public function handle(Request $request, Closure $next): Response
    {
        // নিষিদ্ধ URL বা ফাইলের লিস্ট
        $restrictedPaths = [
            'storage',  // স্টোরেজ ফাইল
            '.htaccess',         // অ্যাডমিন ডাটা
            'admin',         // অ্যাডমিন ডাটা
            'admin/dashboard',         // অ্যাডমিন ডাটা
            '.env',               // Laravel .env ফাইল (ডিরেক্ট অ্যাক্সেস করা যাবে না)
        ];
        if($request->user() && $request->user()->role !== 'admin'){
            foreach ($restrictedPaths as $path) {
                if ($request->is($path)) {
                    abort(403); // 403 পেজ দেখাবে
                }
            }
         }

        return $next($request);
    }
}
