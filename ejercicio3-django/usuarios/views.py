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
        "edad": "20",
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

    # Cambiar color si edad es >=18
    # Definir la ead como variable numérica para poder hacer la condición (no puedo con String)
    edad = int(usuario['edad'])
    # Variable color_edad que cambia según condición
    color_edad = "green" if edad >= 18 else ""

    # Mostrar pagos mes a mes
    print("=== Pagos de la asociación ===")
    #Variable pagos_detalle para almacenar los meses y pagos
    pagos_detalle = ""
    total_pagado = 0
    for mes, cantidad in usuario["pagos"].items():
        estado = "PAGADO" if cantidad > 0 else "PENDIENTE"
        print(f"{mes.capitalize():<10}: {cantidad} € -> {estado}")
        #Añadir al string vacío pagos_detalle el mes y la cantidad como una lista
        pagos_detalle = pagos_detalle +(f"<li>{mes.capitalize():<10}: {cantidad} € -> {estado}</li>")
        total_pagado += cantidad

    print("\nTotal anual pagado:", total_pagado, "€")


    html = f"""
        <html>
            <head><title>DDatos de un Usuario</title></head>
            <body>
                <h1>Información personal</h1>
                <!--Para incluir datos que se encuentran en la vista, usamos llaves como se ve a continuación -->
                <p><strong>Nombre:</strong> {usuario['nombre']}</p>
                <p><strong>Apellidos:</strong> {usuario['apellidos']}</p>
                
                <!--Añadir estilo de color con la variable color_edad y la condición-->
                <!--Pongo un span con la edad porque si le añado el color al párrafo cambia toda la línea-->
                <p><strong>Edad:</strong> <span style="color:{color_edad};">{usuario['edad']}</edad></p>

                <p><strong>DNI:</strong> {usuario['dni']}</p>
                <p><strong>Email:</strong> {usuario['email']}</p>
                <p><strong>Teléfono:</strong> {usuario['telefono']}</p>

                <h2>Detalle de los pagos</h2>
                <ul>
                    {pagos_detalle}
                </ul>
                <p><strong>Total pagado:</strong> {total_pagado} €</p>            
            </body>
        </html>
        """
    return HttpResponse(html)
