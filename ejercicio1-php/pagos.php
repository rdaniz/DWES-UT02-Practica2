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
    // id único socio1
    'socio1' => [
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
// en cada iteración y sumará los importes
foreach ($socio['pagos'] as $pago) {
    // Condición de si el estado es Pagado, suma el importe a $totalPagado
    if ($pago['estado'] === 'Pagado') {
        $totalPagado = $totalPagado + $pago['importe'];
    }
}

// Prueba mostrar por consola un $totalPagado - en consola php pagos.php
// echo $totalPagado;
?>

<!-- Creación documento html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dponzmv pagos.php</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            font-size: 20px;
        }
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #ddd;
        }
        .pendiente {
            background-color: #feb7bdff;
        }

    </style>
</head>
<body>
    <!-- Mostrar datos del socio seleccionado -->

    <h1>Pagos de un socio</h1>
    <h2>Datos del socio</h2>
    <p><strong>Nombre: </strong><?php echo $socio['nombre'] ?></p>
    <p><strong>Apellidos: </strong><?php echo $socio['apellidos'] ?></p>
    <p><strong>DNI: </strong><?php echo $socio['dni'] ?></p>
    <p><strong>Email: </strong><?php echo $socio['email'] ?></p>
    <p><strong>Teléfono: </strong><?php echo $socio['telefono'] ?></p>

    <h2>Detalle de los pagos</h2>

    <!-- Creación de tabla -->

    <table>
        <tr>
            <th>Mes</th>
            <th>Importe</th>
            <th>Estado</th>
            <th>Fecha de pago</th>
        </tr>
        <tr>
            <!-- Recorrer todos los estados de pago
                - Si son Pendiente usa la clase pendiente (fondo rojo)
                - Inserta mes, importe y estado de cada pago
            -->
            <?php foreach ($socio['pagos'] as $pago) { ?>
                <?php if ($pago['estado'] === 'Pendiente') { ?>
                    <tr class="pendiente">
                <?php } else { ?>
                    <tr>
                <?php } ?>
                    <td><?php echo $pago['mes']; ?></td>
                    <td><?php echo $pago['importe']; ?><span> €</span></td>
                    <td><?php echo $pago['estado']; ?></td>
                    <td>
                        <?php
                        // Si existe fecha de pago, la inserta. Si es nula pone un -
                        if ($pago['fecha_pago'] !== null) {
                            echo $pago['fecha_pago'];
                        } else {
                            echo '-';
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td><strong>Total pagado</strong></td>
                <!-- Mostar la variable totalPagado calculada previamente -->
                <td><?php echo $totalPagado ?><span> €</span></td>
            </tr>
    </table>
</body>
</html>