<?php

use Illuminate\Support\Facades\Route;

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