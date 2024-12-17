<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    protected $routeMiddleware = [
        // ... other middlewares
        'is_admin' => \App\Http\Middleware\IsAdmin::class,
    ];

    public function myMethod(Request $request)
    {
        // ... your code here
    }
}

