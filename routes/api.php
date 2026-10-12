<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\kamarul_controler;

Route::apiResource('/users', kamarul_controler::class);

Route::get('/users', function () {
    return response()->json([
        'success' => true,
        'message' => 'API Laravel berhasil dijalankan',
        'data' => [
            [
                'id' => 1,
                'name' => 'Arif'
            ]
        ]
    ]);
});