package es.dwes.UT02;

import java.io.Serializable;
import java.util.LinkedHashMap;
import java.util.List;
import java.util.Map;

import jakarta.enterprise.context.RequestScoped;
import jakarta.inject.Named;

@Named("helloBean")
@RequestScoped
public class HelloBean implements Serializable {

    // Práctica 2: Genera en este bean el listado de usuarios que
    // se mostrará en la página.xhtml

    /*
     * private String nombre = "María";
     * private int edad = 28;
     * 
     * public String getNombre() {
     * return nombre;
     * }
     * 
     * public int getEdad() {
     * return edad;
     * }
     * 
     * public List<Producto> getProductos() {
     * return
     * List.of(
     * new Producto("Manzanas", 2.5),
     * new Producto("Peras", 3.0),
     * new Producto("Plátanos", 1.8)
     * );
     * }
     * 
     * 
     * // Clase interna para productos
     * public static class Producto {
     * private String nombre;
     * private double precio;
     * 
     * public Producto(String nombre, double precio) {
     * this.nombre = nombre;
     * this.precio = precio;
     * }
     * 
     * public String getNombre() { return nombre; }
     * public double getPrecio() { return precio; }
     * }
     * // Práctica 2: Crea aquí la clase que defina a un usuario
     */

    /*
     * He visto que a parte de HashMap, TreeMap o LinkedHashMap pueden hacerse maps
     * con Map.of
     * pero no garantiza orden y es inmutable. Ejemplo:
     * new Usuario(
     * "usuario", "apellidos", "00000000X", "usuario@ejemplo.com", 38,
     * Map.of("Enero", 50.0, "Febrero", null, "Marzo", 50.0)
     * ),
     * Uso LinkedHashMap ya que mantiene el orden de inserción y puedo mantener el
     * orden de los meses.
     * 
     * · HashMap - No garantiza orden - Mutable - Cuando no importa el orden y se
     * quiere agregar/modificar elementos
     * · LinkedHashMap - Mantiene orden de inserción - Mutable - Cuando se quieren
     * mostrar los elementos en el orden que se agregan
     * · TreeMap - Ordena por clave - Mutable - Cuando se quiere que las claves se
     * ordenen automáticamente
     * · Map.of(...) - No garantiza orden - Inmutable - Solo lectura, no se puede
     * modificar
     */

    private List<Usuario> usuarios;

    // Constructor HelloBean: inicializa la lista de usuarios
    /*
     * No es necesario si solo se usan variables simples inicializadas como en el
     * ejemplo del ejercicio2 (está implícito)
     * Necesario si se quiere inicializar listas u objetos complejos
     */
    public HelloBean() {
        // Crear os maps de pagos de cada usuario
        Map<String, Double> pagosDaniel = new LinkedHashMap<>();
        pagosDaniel.put("Enero", 10.0);
        pagosDaniel.put("Febrero", 10.0);
        pagosDaniel.put("Marzo", 10.0);
        pagosDaniel.put("Abril", 10.0);
        pagosDaniel.put("Mayo", 10.0);
        pagosDaniel.put("Junio", 10.0);
        pagosDaniel.put("Julio", 10.0);
        pagosDaniel.put("Agosto", 10.0);
        pagosDaniel.put("Septiembre", 10.0);
        pagosDaniel.put("Octubre", 10.0);
        pagosDaniel.put("Noviembre", null);
        pagosDaniel.put("Diciembre", null);

        Map<String, Double> pagosJuan = new LinkedHashMap<>();
        pagosJuan.put("Enero", 10.0);
        pagosJuan.put("Febrero", 10.0);
        pagosJuan.put("Marzo", 10.0);
        pagosJuan.put("Abril", 10.0);
        pagosJuan.put("Mayo", 10.0);
        pagosJuan.put("Junio", 10.0);
        pagosJuan.put("Julio", 10.0);
        pagosJuan.put("Agosto", 10.0);
        pagosJuan.put("Septiembre", 10.0);
        pagosJuan.put("Octubre", 10.0);
        pagosJuan.put("Noviembre", 10.0);
        pagosJuan.put("Diciembre", null);

        Map<String, Double> pagosLucia = new LinkedHashMap<>();
        pagosLucia.put("Enero", 10.0);
        pagosLucia.put("Febrero", 10.0);
        pagosLucia.put("Marzo", 10.0);
        pagosLucia.put("Abril", 10.0);
        pagosLucia.put("Mayo", 10.0);
        pagosLucia.put("Junio", 10.0);
        pagosLucia.put("Julio", 10.0);
        pagosLucia.put("Agosto", 10.0);
        pagosLucia.put("Septiembre", 10.0);
        pagosLucia.put("Octubre", null);
        pagosLucia.put("Noviembre", null);
        pagosLucia.put("Diciembre", null);

        // Crear la lista de usuarios usando los maps ya creados
        usuarios = List.of(
                new Usuario("Daniel", "Ponz Martínez", "11111111V", "dponzmv@fpvirtualaragon.es", 37, pagosDaniel),
                new Usuario("Juan", "Sánchez Burriel", "22222222B", "jsanchezb@fpvirtualaragon.es", 30, pagosJuan),
                new Usuario("Lucía", "Santos Ruiz", "11223344C", "lucia@fpvirtualaragon.es", 40, pagosLucia));

    }

    // Métodos getters y setters
    public List<Usuario> getUsuarios() {
        return usuarios;
    }

    public void setUsuarios(List<Usuario> usuarios) {
        this.usuarios = usuarios;
    }

    // Método para calcular total de pagos
    public double calcularTotal(Usuario u) {
        double total = 0.0; // inicializar la suma en 0

        // Recorrer cada valor del mapa de pagos
        for (Double pago : u.getPagos().values()) {
            if (pago != null) { // sumar solo los pagos que no son null
                total = total + pago; // acumular el pago en total
            }
        }

        return total; // devolver la suma final
    }

    // Clase interna Usuario
    public static class Usuario {

        private String nombre;
        private String apellidos;
        private String dni;
        private String email;
        private int edad;
        private Map<String, Double> pagos;

        public Usuario(String nombre, String apellidos, String dni, String email, int edad, Map<String, Double> pagos) {
            this.nombre = nombre;
            this.apellidos = apellidos;
            this.dni = dni;
            this.email = email;
            this.edad = edad;
            this.pagos = pagos;
        }

        public String getNombre() {
            return nombre;
        }

        public String getApellidos() {
            return apellidos;
        }

        public String getDni() {
            return dni;
        }

        public String getEmail() {
            return email;
        }

        public int getEdad() {
            return edad;
        }

        public Map<String, Double> getPagos() {
            return pagos;
        }

        public void setNombre(String nombre) {
            this.nombre = nombre;
        }

        public void setApellidos(String apellidos) {
            this.apellidos = apellidos;
        }

        public void setDni(String dni) {
            this.dni = dni;
        }

        public void setEmail(String email) {
            this.email = email;
        }

        public void setEdad(int edad) {
            this.edad = edad;
        }

        public void setPagos(Map<String, Double> pagos) {
            this.pagos = pagos;
        }

    }

}
