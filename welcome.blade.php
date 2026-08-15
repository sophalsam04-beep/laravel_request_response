<?php

// Return a view from a routing controller
        Route::get('/', static function () {
            return view('welcome', ['name' => 'Samantha']);
        });

        Route::get('/', static function () {
            return view('welcome', ['name' => 'Phal']);
        });






?>
