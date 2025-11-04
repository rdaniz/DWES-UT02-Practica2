<?php

/*
Array asociativo:
   Es un array en el que cada elemento tiene una "clave" personalizada.

Array multidimensional:
   Es un array que contiene otros arrays.
*/

// Creación de array asociativo multidimensional

$socios = [
    'socio1' => [
        'id' => 's1',
        'nombre' => 'Daniel',
        'apellidos' => 'Ponz Martínez',
        'dni' => '11111111V',
        'email' => 'dponzmv@fpvirtualaragon.es',
        'telefono' => '611111111',
        'pagos' => [
            '2025-01' => [
                'mes' => 'Enero',
                'importe' => 10,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-01-10'
            ],
            '2025-02' => [
                'mes' => 'Febrero',
                'importe' => 20,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-02-20'
            ],
            '2025-03' => [
                'mes' => 'Marzo',
                'importe' => 30,
                'estado' => 'Pendiente',
                'fecha_pago' => null
            ]
        ]
            ],

    'socio2' => [
        'id' => 's2',
        'nombre' => 'Juan',
        'apellidos' => 'Sánchez Burriel',
        'dni' => '22222222B',
        'email' => 'jsanchezb@fpvirtualaragon.es',
        'telefono' => '622222222',
        'pagos' => [
            '2025-01' => [
                'mes' => 'Enero',
                'importe' => 50,
                'estado' => 'Pendiente',
                'fecha_pago' => null
            ],
            '2025-02' => [
                'mes' => 'Febrero',
                'importe' => 60,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-02-22'
            ],
            '2025-03' => [
                'mes' => 'Marzo',
                'importe' => 10,
                'estado' => 'Pendiente',
                'fecha_pago' => null
            ]
        ]
    ]
];

// Prueba mostrar por consola un importe
// Ejecutar comando php pagos.php en la carpeta ejercicio1-php
// echo $socios['socio2']['pagos']['2025-03']['importe'];
?>