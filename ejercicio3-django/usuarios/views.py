from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse

import json

def usuario_view(request):
    #    usuario = {
    #        "nombre": "Ana",
    #        "apellidos": "Martínez Pérez",
    #        "edad": 30,
    #        "email": "ana@example.com",
    #    }

    """
    Ejercicio Python: Usuario y pagos mensuales en una asociación
    - Se utilizan diccionarios para almacenar la información.
    - Se trabaja con JSON para representar los usuario.
    - Se emplean bucles para recorrer y mostrar la información.
    """

    # usuario del usuario en formato JSON
    usuario_json = """
    {
        "nombre": "Laura",
        "apellidos": "Gómez Pérez",
        "dni": "12345678A",
        "email": "laura.gomez@example.com",
        "telefono": "654321987",
        "pagos": {
            "enero": 20,
            "febrero": 20,
            "marzo": 20,
            "abril": 0,
            "mayo": 20,
            "junio": 20,
            "julio": 20,
            "agosto": 0,
            "septiembre": 20,
            "octubre": 20,
            "noviembre": 20,
            "diciembre": 20
        }
    }
    """
    # Cargar JSON a un diccionario de Python
    usuario = json.loads(usuario_json)

    # Mostrar pagos mes a mes
    print("=== Pagos de la asociación ===")
    total_pagado = 0
    for mes, cantidad in usuario["pagos"].items():
        estado = "PAGADO" if cantidad > 0 else "PENDIENTE"
        print(f"{mes.capitalize():<10}: {cantidad} € -> {estado}")
        total_pagado += cantidad

    print("\nTotal anual pagado:", total_pagado, "€")


    html = f"""
        <html>
            <head><title>DDatos de un Usuario</title></head>
            <body>
                <h1>Información personal</h1>
                <!--Para incluir datos que se encuentran en la vista, usamos llaves como se ve a continuación -->
                <p><strong>Mi Nombre:</strong> {usuario['nombre']}</p>
                <p><strong>Apellidos:</strong> {usuario['apellidos']}</p>
                <p><strong>DNI:</strong> {usuario['dni']}</p>
                <p><strong>Email:</strong> {usuario['email']}</p>
                <p><strong>Teléfono:</strong> {usuario['telefono']}</p>
                <p><strong>Total pagado:</strong> {total_pagado}</p>            
            </body>
        </html>
        """
    return HttpResponse(html)
