<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\BlockRestrictedAccess;

return Application::configure(dirname(__DIR__))

    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )

    ->withMiddleware(function (Middleware $middleware) {
        // গ্লোবাল Middleware নিবন্ধন
        $middleware->append([
            BlockRestrictedAccess::class, // নিষিদ্ধ URL গুলো ব্লক করার জন্য
        ]);

        // Middleware Aliases নিবন্ধন
        $middleware->alias([
            'role' => RoleMiddleware::class, // নির্দিষ্ট রুটের জন্য
            'restricted' => BlockRestrictedAccess::class, // যেকোনো Route-এ প্রয়োগ করা যাবে
        ]);
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    
    ->create();
