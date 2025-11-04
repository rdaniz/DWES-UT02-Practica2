<?php

/*
Array indexado:
    Es un array donde cada elemento tiene un índice numérico automático, que empieza en
    0 a menos que se defina.
    Ejemplo:
    $socio = ['Daniel', 'Ponz Martínez'];

    Es lo mismo que:
    $socio = [
        0 => 'Daniel',
        1 => 'Ponz Martínez'
    ];

Array asociativo:
    Es un array en el que cada elemento tiene una "clave" personalizada.
    Para separar cada clave valor se utiliza una , exceptuando en el último par.
    Ejemplo:
    $socio = [
       'nombre' => 'Daniel',
       'apellidos' => 'Ponz Martínez'
    ];

Array multidimensional:
    Es un array que contiene otros arrays.
    Para separar cada clave valor se utiliza una , exceptuando en el último par.
    Para separar cada array se utiliza una , exceptuando en el último par.
    Ejemplo:
        $socios = [
        'socio1' => [
            'nombre' => 'Daniel',
            'apellidos' => 'Ponz Martínez'
        ],
        'socio2' => [
            'nombre' => 'Juan',
            'apellidos' => 'Sánchez Burriel'
        ],
   ];
*/

// Array asociativo multidimensional $socios
$socios = [
    // Nuevo array asociatico multidimensional [socio1] dentro de $socios
    'socio1' => [
        'id' => 's1',
        'nombre' => 'Daniel',
        'apellidos' => 'Ponz Martínez',
        'dni' => '11111111V',
        'email' => 'dponzmv@fpvirtualaragon.es',
        'telefono' => '611111111',
        // Nuevo array asociativo multidimensional [pagos] dentro de $socios['socio1']
        'pagos' => [
            // Nuevo array asociativo [2025-01] dentro de $socios['socio1']['pagos']
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
                'fecha_pago' => '2025-02-05'
            ],
            '2025-03' => [
                'mes' => 'Marzo',
                'importe' => 30,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-03-10'
            ],
            '2025-04' => [
                'mes' => 'Abril',
                'importe' => 10,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-04-05'
            ],
            '2025-05' => [
                'mes' => 'Mayo',
                'importe' => 20,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-05-10'
            ],
            '2025-06' => [
                'mes' => 'Junio',
                'importe' => 30,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-06-05'
            ],
            '2025-07' => [
                'mes' => 'Julio',
                'importe' => 10,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-07-10'
            ],
            '2025-08' => [
                'mes' => 'Agosto',
                'importe' => 20,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-08-05'
            ],
            '2025-09' => [
                'mes' => 'Septiembre',
                'importe' => 30,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-09-10'
            ],
            '2025-10' => [
                'mes' => 'Octubre',
                'importe' => 10,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-10-05'
            ],
            '2025-11' => [
                'mes' => 'Noviembre',
                'importe' => 20,
                'estado' => 'Pendiente',
                'fecha_pago' => null
            ],
            '2025-12' => [
                'mes' => 'Diciembre',
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
                'importe' => 10,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-01-10'
            ],
            '2025-02' => [
                'mes' => 'Febrero',
                'importe' => 20,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-02-05'
            ],
            '2025-03' => [
                'mes' => 'Marzo',
                'importe' => 30,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-03-10'
            ],
            '2025-04' => [
                'mes' => 'Abril',
                'importe' => 10,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-04-05'
            ],
            '2025-05' => [
                'mes' => 'Mayo',
                'importe' => 20,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-05-10'
            ],
            '2025-06' => [
                'mes' => 'Junio',
                'importe' => 30,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-06-05'
            ],
            '2025-07' => [
                'mes' => 'Julio',
                'importe' => 10,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-07-10'
            ],
            '2025-08' => [
                'mes' => 'Agosto',
                'importe' => 20,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-08-05'
            ],
            '2025-09' => [
                'mes' => 'Septiembre',
                'importe' => 30,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-09-10'
            ],
            '2025-10' => [
                'mes' => 'Octubre',
                'importe' => 10,
                'estado' => 'Pagado',
                'fecha_pago' => '2025-10-05'
            ],
            '2025-11' => [
                'mes' => 'Noviembre',
                'importe' => 20,
                'estado' => 'Pendiente',
                'fecha_pago' => null
            ],
            '2025-12' => [
                'mes' => 'Diciembre',
                'importe' => 30,
                'estado' => 'Pendiente',
                'fecha_pago' => null
            ]
        ]
    ]
];

// Prueba mostrar por consola un importe
// Ejecutar comando php pagos.php en la carpeta ejercicio1-php
// echo $socios['socio2']['pagos']['2025-03']['importe'];

// Seleccionar el socio que queremos mostrar
$socio = $socios['socio1'];


// Calcular el total pagado

// Inicializar la variable totalPagado a 0 donde se sumará todo lo que esté en estado Pagado
$totalPagado = 0;
// Bucle foreach que recorrerá todos los pagos del socio y almacenándolos en la variable $pago temporalmente
// en cada iteración
foreach ($socio['pagos'] as $pago) {
    // Condición de si el estado es Pagado, suma el importe a $totalPagado
    if ($pago['estado'] === 'Pagado') {
        $totalPagado = $totalPagado + $pago['importe'];
    }
}

// Prueba mostrar por consola un $totalPagado
// echo $totalPagado;
?>