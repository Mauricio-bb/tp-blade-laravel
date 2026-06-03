<?php

use Illuminate\Support\Facades\Route;

// 1. Ruta de Inicio
Route::get('/', function () {
    return view('inicio');
});

// 2. Ruta de Productos (con datos "hardcodeados" en un array)
Route::get('/productos', function () {
    $productos = [
        [
            'nombre' => 'Yerba mate',
            'precio' => 2500,
            'stock' => 15,
        ],
        [
            'nombre' => 'Té verde',
            'precio' => 1800,
            'stock' => 8,
        ],
        [
            'nombre' => 'Miel pura',
            'precio' => 3200,
            'stock' => 0,
        ],
    ];

    return view('productos', [
        'productos' => $productos,
    ]);
});

// 3. Ruta de Contacto
Route::get('/contacto', function () {
    $email = 'contacto@miempresa.com';
    return view('contacto', [
        'email' => $email,
    ]);
});
// 4. Ruta de Nosotros
Route::get('/nosotros', function () {
    return view('nosotros');
});