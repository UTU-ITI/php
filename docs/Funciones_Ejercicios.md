🧩 Funciones en PHP - Ejercicios Prácticos y Cuestionario
🎯 Objetivos de aprendizaje
Crear y utilizar funciones personalizadas
Trabajar con parámetros y valores de retorno
Comprender el alcance de variables (scope)
Usar funciones nativas de PHP
💻 Ejercicios Prácticos
Ejercicio 1: Primera Función
Dificultad: ⭐ Básico

php
<?php
// TODO: Creá una función llamada saludar() que:
// 1. No reciba parámetros
// 2. Muestre "¡Hola, bienvenido a PHP!"
// 3. Llamá la función 3 veces

?>
Ejercicio 2: Función con Parámetros
Dificultad: ⭐ Básico

php
<?php
// TODO: Creá una función saludarPersona($nombre) que:
// 1. Reciba un nombre como parámetro
// 2. Muestre "Hola, [nombre]!"
// 3. Llamála con diferentes nombres: "Ana", "Carlos", "María"

?>
Ejercicio 3: Función con Retorno
Dificultad: ⭐⭐ Intermedio

php
<?php
// TODO: Creá una función sumar($a, $b) que:
// 1. Reciba dos números
// 2. Devuelva la suma (use return)
// 3. Probála con diferentes valores
// 4. Guardá el resultado en una variable y mostralo

// Ejemplo de uso:
// $resultado = sumar(5, 3);
// echo "El resultado es: $resultado"; // El resultado es: 8
?>
Ejercicio 4: Calculadora con Funciones
Dificultad: ⭐⭐ Intermedio

php
<?php
// TODO: Creá 4 funciones:
// - sumar($a, $b)
// - restar($a, $b)
// - multiplicar($a, $b)
// - dividir($a, $b)

// Cada función debe:
// 1. Recibir dos números
// 2. Devolver el resultado
// 3. En dividir(), validar que el divisor no sea 0

// Probá todas las funciones con los números 10 y 5
?>
Ejercicio 5: Función con Valor por Defecto
Dificultad: ⭐⭐ Intermedio

php
<?php
// TODO: Creá una función calcularPrecioFinal($precio, $descuento = 0) que:
// 1. Reciba el precio del producto
// 2. Reciba un descuento opcional (por defecto 0%)
// 3. Calcule el precio final después del descuento
// 4. Devuelva el precio final

// Probála de estas formas:
// calcularPrecioFinal(1000);           // Sin descuento
// calcularPrecioFinal(1000, 10);       // Con 10% de descuento
// calcularPrecioFinal(1000, 25);       // Con 25% de descuento
?>
Ejercicio 6: Validación de Email
Dificultad: ⭐⭐ Intermedio

php
<?php
// TODO: Creá una función validarEmail($email) que:
// 1. Verifique que el email contenga "@"
// 2. Verifique que tenga al menos 5 caracteres
// 3. Devuelva true si es válido, false si no lo es

// Probá con:
// - "usuario@example.com" (válido)
// - "usuario.com" (inválido)
// - "a@b" (inválido)

// BONUS: Usá la función filter_var() de PHP para validación real
?>
Ejercicio 7: Función para Determinar Par o Impar
Dificultad: ⭐⭐ Intermedio

php
<?php
// TODO: Creá una función esPar($numero) que:
// 1. Reciba un número
// 2. Devuelva true si es par, false si es impar
// 3. Use el operador módulo (%)

// TODO: Creá otra función esImpar($numero) usando esPar()
// Pista: esImpar puede llamar a esPar y negar el resultado

// Probá con números del 1 al 10
?>
Ejercicio 8: Función que Devuelve Array
Dificultad: ⭐⭐⭐ Avanzado

php
<?php
// TODO: Creá una función obtenerEstadisticas($numeros) que:
// 1. Reciba un array de números
// 2. Calcule: suma, promedio, mayor y menor
// 3. Devuelva un array asociativo con los resultados

// Ejemplo:
// $numeros = [5, 10, 15, 20, 25];
// $stats = obtenerEstadisticas($numeros);
// 
// Resultado esperado:
// [
//     "suma" => 75,
//     "promedio" => 15,
//     "mayor" => 25,
//     "menor" => 5
// ]
?>
Ejercicio 9: Función Recursiva - Factorial
Dificultad: ⭐⭐⭐ Avanzado

php
<?php
// TODO: Creá una función factorial($n) que:
// 1. Calcule el factorial de un número
// 2. Use recursión (la función se llama a sí misma)
// 3. Caso base: factorial(0) = 1, factorial(1) = 1

// Recordá: 5! = 5 * 4 * 3 * 2 * 1 = 120

// Probá con: 5, 7, 10
?>
Ejercicio 10: Generador de Contraseñas
Dificultad: ⭐⭐⭐ Avanzado

php
<?php
// TODO: Creá una función generarPassword($longitud = 8) que:
// 1. Genere una contraseña aleatoria
// 2. Incluya letras mayúsculas, minúsculas y números
// 3. Tenga la longitud especificada

// PISTAS:
// - Usá str_shuffle() para mezclar caracteres
// - Usá substr() para obtener la longitud deseada
// - Caracteres disponibles: "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"

// Probá generando contraseñas de 8, 12 y 16 caracteres
?>
Ejercicio 11: Función con Múltiples Retornos
Dificultad: ⭐⭐⭐ Avanzado

php
<?php
// TODO: Creá una función clasificarEdad($edad) que:
// 1. Devuelva diferentes valores según la edad:
//    - "bebé" si 0-2
//    - "niño" si 3-12
//    - "adolescente" si 13-17
//    - "adulto" si 18-64
//    - "adulto mayor" si 65+
// 2. Use múltiples return

// Probá con diferentes edades y mostrá el resultado
?>
Ejercicio 12: Conversor de Unidades
Dificultad: ⭐⭐⭐ Avanzado

php
<?php
// TODO: Creá funciones para convertir:
// - celsiusAFahrenheit($celsius)
// - fahrenheitACelsius($fahrenheit)
// - kmAMillas($km)
// - millasAKm($millas)

// Fórmulas:
// F = C * 9/5 + 32
// C = (F - 32) * 5/9
// Millas = Km * 0.621371
// Km = Millas / 0.621371

// Probá cada función con valores de ejemplo
?>
Ejercicio 13: Función con Paso por Referencia
Dificultad: ⭐⭐⭐⭐ Muy Avanzado

php
<?php
// TODO: Creá una función incrementar(&$numero) que:
// 1. Reciba un número por referencia (usando &)
// 2. Lo incremente en 1
// 3. No devuelva nada (void)

$valor = 10;
incrementar($valor);
echo $valor; // Debería mostrar 11

// TODO: Explicá la diferencia entre paso por valor y paso por referencia
?>
Ejercicio 14: Sistema de Descuentos
Dificultad: ⭐⭐⭐⭐ Muy Avanzado

php
<?php
// TODO: Creá las siguientes funciones:

// calcularDescuento($precio, $porcentaje)
// - Calcula el monto del descuento

// aplicarDescuento($precio, $porcentaje)
// - Devuelve el precio con descuento aplicado

// calcularIVA($precio, $tasa = 21)
// - Calcula el IVA sobre un precio

// precioFinal($precioBase, $descuento = 0, $iva = 21)
// - Usa las funciones anteriores
// - Primero aplica descuento, luego suma IVA
// - Devuelve el precio final

// Ejemplo de uso:
// $precio = precioFinal(1000, 10, 21);
// Resultado esperado: (1000 - 10%) + 21% IVA = 1089
?>
Ejercicio 15: Analizador de Texto
Dificultad: ⭐⭐⭐⭐ Muy Avanzado

php
<?php
// TODO: Creá una función analizarTexto($texto) que devuelva un array con:
// - Cantidad de caracteres (strlen)
// - Cantidad de palabras (str_word_count)
// - Cantidad de oraciones (contar puntos, signos de exclamación e interrogación)
// - Primera palabra
// - Última palabra
// - Texto en mayúsculas
// - Texto en minúsculas

// Ejemplo:
// $texto = "Hola mundo. ¿Cómo estás? ¡Muy bien!";
// $analisis = analizarTexto($texto);
// print_r($analisis);
?>
📋 Cuestionario de Seguimiento
Parte A: Opción Múltiple (1 punto c/u)
1. ¿Cuál es la palabra clave para definir una función en PHP?

 a) def
 b) func
 c) function
 d) define
2. ¿Cómo se devuelve un valor desde una función?

 a) output
 b) return
 c) echo
 d) send
3. ¿Cuál es el resultado de esta función?

php
function test() {
    return 5;
    echo 10;
}
echo test();
 a) 5
 b) 10
 c) 510
 d) Error
4. ¿Qué es un parámetro con valor por defecto?

 a) Un parámetro obligatorio
 b) Un parámetro que tiene un valor si no se proporciona uno
 c) Un parámetro que siempre devuelve null
 d) No existe en PHP
5. ¿Cuál es la forma correcta de llamar a una función?

 a) function sumar();
 b) call sumar();
 c) sumar();
 d) execute sumar();
6. ¿Qué significa el scope de una variable?

 a) Su tipo de dato
 b) Su ámbito de visibilidad
 c) Su valor inicial
 d) Su longitud
7. ¿Qué es una función recursiva?

 a) Una función que no devuelve nada
 b) Una función que se llama a sí misma
 c) Una función con muchos parámetros
 d) Una función que usa arrays
8. ¿Cuál es el resultado?

php
function suma($a, $b = 5) {
    return $a + $b;
}
echo suma(10);
 a) 10
 b) 15
 c) 5
 d) Error
9. ¿Qué hace el símbolo & en un parámetro?

 a) Lo hace opcional
 b) Paso por referencia
 c) Paso por valor
 d) Lo convierte en string
10. ¿Cuántos valores puede devolver una función con return?

 a) Ninguno
 b) Solo uno
 c) Dos
 d) Infinitos
Parte B: Verdadero o Falso (1 punto c/u)
11. Una función puede llamar a otra función dentro de ella.

 Verdadero
 Falso
12. Una función sin return no puede usarse en PHP.

 Verdadero
 Falso
13. Los parámetros con valor por defecto deben ir al final de la lista de parámetros.

 Verdadero
 Falso
14. Una variable declarada dentro de una función es accesible fuera de ella.

 Verdadero
 Falso
15. PHP tiene funciones nativas como strlen(), count(), etc.

 Verdadero
 Falso
Parte C: Análisis de Código (2 puntos c/u)
16. ¿Qué muestra este código?

php
function multiplicar($x, $y) {
    return $x * $y;
}
$resultado = multiplicar(4, 5);
echo $resultado + 10;
17. ¿Cuál es el error en este código?

php
function saludar($nombre) {
    echo "Hola $nombre";
    return "Chau";
}
$mensaje = saludar("Ana");
echo $mensaje;
18. ¿Qué muestra este código?

php
function contar() {
    static $contador = 0;
    $contador++;
    return $contador;
}
echo contar();
echo contar();
echo contar();
19. ¿Qué está mal aquí?

php
function calcular($a, $b = 5, $c) {
    return $a + $b + $c;
}
echo calcular(1, 2, 3);
20. ¿Qué devuelve esta función?

php
function obtenerDatos() {
    return ["nombre" => "Juan", "edad" => 25];
}
$datos = obtenerDatos();
echo $datos["nombre"];
Parte D: Desarrollo (3 puntos c/u)
21. Función de Validación

Creá una función validarPassword($password) que:

Verifique que tenga al menos 8 caracteres
Contenga al menos una mayúscula
Contenga al menos un número
Devuelva true si cumple todas las condiciones, false si no
22. Función Matemática

Creá una función calcularAreaCirculo($radio) que:

Calcule el área de un círculo (π * r²)
Devuelva el resultado redondeado a 2 decimales
Use pi() para obtener el valor de π
23. Función de Array

Creá una función filtrarMayoresQue($array, $valor) que:

Reciba un array de números y un valor
Devuelva un nuevo array con solo los números mayores que $valor
Use un bucle para recorrer el array
Ejemplo:

php
$nums = [5, 10, 15, 20, 25];
$resultado = filtrarMayoresQue($nums, 12);
// Resultado: [15, 20, 25]
✅ Respuestas Correctas
Parte A
c) function
b) return
a) 5 (el return detiene la ejecución)
b) Un parámetro que tiene un valor si no se proporciona uno
c) sumar();
b) Su ámbito de visibilidad
b) Una función que se llama a sí misma
b) 15 (10 + 5 por defecto)
b) Paso por referencia
b) Solo uno (aunque puede ser un array con múltiples valores)
Parte B
Verdadero
Falso (puede hacer acciones sin devolver valor)
Verdadero
Falso (scope local)
Verdadero
Parte C
Muestra: 30 (4*5=20, 20+10=30)
No hay error, muestra: "Hola AnaChau"
Muestra: 123 (variable estática mantiene su valor)
Error: parámetro sin valor por defecto después de uno con valor por defecto
Muestra: "Juan"
Parte D
21. Solución:

php
function validarPassword($password) {
    if (strlen($password) < 8) return false;
    if (!preg_match('/[A-Z]/', $password)) return false;
    if (!preg_match('/[0-9]/', $password)) return false;
    return true;
}
22. Solución:

php
function calcularAreaCirculo($radio) {
    $area = pi() * ($radio ** 2);
    return round($area, 2);
}
23. Solución:

php
function filtrarMayoresQue($array, $valor) {
    $resultado = [];
    foreach ($array as $num) {
        if ($num > $valor) {
            $resultado[] = $num;
        }
    }
    return $resultado;
}
🎯 Criterios de Evaluación
Sección	Puntaje
Parte A (10 × 1)	10 puntos
Parte B (5 × 1)	5 puntos
Parte C (5 × 2)	10 puntos
Parte D (3 × 3)	9 puntos
TOTAL	34 puntos
Escala:

31-34: Excelente (9-10)
25-30: Muy Bueno (7-8)
20-24: Bueno (6)
< 20: Requiere refuerzo
📚 Referencia Rápida de Funciones
Sintaxis Básica
php
function nombreFuncion($parametro1, $parametro2 = valorDefecto) {
    // código
    return $resultado;
}
Funciones Nativas Útiles
Función	Descripción	Ejemplo
strlen($str)	Longitud de string	strlen("Hola") → 4
count($arr)	Cantidad de elementos	count([1,2,3]) → 3
round($num, $dec)	Redondear número	round(3.14159, 2) → 3.14
strtoupper($str)	Convertir a mayúsculas	strtoupper("hola") → "HOLA"
strtolower($str)	Convertir a minúsculas	strtolower("HOLA") → "hola"
substr($str, $start, $len)	Subcadena	substr("Hola", 0, 2) → "Ho"
str_replace($buscar, $reemplazar, $str)	Reemplazar texto	str_replace("a", "e", "casa") → "cese"
explode($sep, $str)	String a array	explode(",", "a,b,c") → ["a","b","c"]
implode($sep, $arr)	Array a string	implode("-", [1,2,3]) → "1-2-3"
in_array($val, $arr)	Buscar en array	in_array(2, [1,2,3]) → true
Tipos de Funciones
1. Sin parámetros, sin retorno:

php
function saludar() {
    echo "Hola!";
}
2. Con parámetros, sin retorno:

php
function mostrarNombre($nombre) {
    echo "Hola $nombre";
}
3. Sin parámetros, con retorno:

php
function obtenerFecha() {
    return date("Y-m-d");
}
4. Con parámetros y retorno:

php
function sumar($a, $b) {
    return $a + $b;
}
5. Con parámetros por defecto:

php
function saludar($nombre = "Usuario") {
    return "Hola $nombre";
}
6. Paso por referencia:

php
function duplicar(&$numero) {
    $numero = $numero * 2;
}
💡 Consejos de Buenas Prácticas
Nombres descriptivos: usa verbos que describan la acción
✅ calcularTotal(), validarEmail(), obtenerUsuario()
❌ hacer(), func1(), proceso()
Una sola responsabilidad: cada función debe hacer una cosa específica
Comentarios: documenta qué hace la función, sus parámetros y qué devuelve
Validación: verifica los parámetros antes de usarlos
DRY (Don't Repeat Yourself): si repetís código, creá una función
Return temprano: devuelve resultados lo antes posible
php
function esMayor($edad) {
    if ($edad < 18) {
        return false;
    }
    return true;
}
🔥 Desafío Final
Creá un sistema completo de gestión de productos con las siguientes funciones:

php
// Funciones a implementar:
- crearProducto($nombre, $precio, $stock)
- calcularPrecioConIVA($precio, $iva = 21)
- aplicarDescuento($precio, $porcentaje)
- verificarStock($stock, $cantidad)
- calcularTotal($precio, $cantidad)
- generarReporte($productos) // devuelve un array con estadísticas

// Usá todas las funciones para simular una venta
Este desafío integra todos los conceptos vistos. ¡Éxito! 🚀

