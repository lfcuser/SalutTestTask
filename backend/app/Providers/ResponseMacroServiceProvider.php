<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Response::macro('success', function ($data = null) {
            return Response::json([
                'success' => true,
                'data' => $data,
            ]);
        });

        Response::macro('error', function ($message, $status = 400) {
            return Response::json([
                'success' => false,
                'message' => $message,
            ], $status);
        });
    }
}
