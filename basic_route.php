<?php

    // Mapping Routing in your Controller
        use App\Http\Controllers\ProductController;
        use Illuminate\Support\Facades\Route;

        Route::get('/products', [ProductController::class, 'index']);
        Route::get('/products/{id}', [ProductController::class, 'show']);
        Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
        Route::patch('/products/{id}/edit', [ProductController::class, 'update']);
        Route::delete('/products/{id}', [ProductController::class, 'destroy']);





?>
