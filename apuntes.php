<!-- //*Instrucción de raiz para php  -->
<?php
// *Función clasica para imprimir en pantalla
    echo "Hola Mundo" . "<br>";


//?---Tipos de datos---
/**
 * *Los tipos de datos usados son los usuales de cualquier lenguaje de programación: Booleanos(boolean), Enteros(integer), Flotantes(double) y Cadenas(string).
 */

    echo true;

    /**
     * *La función de php "var_dump(valor);", nos permite mostrar en pantalla el valor que colocamos y el tipo de dato relacionado a tal valor.
     */

     var_dump(7.5);
     //Los decimales deben ser representados con "." punto decimal, usar una "," coma hará que se tomen como dos números separados.

     var_dump("Hola Mundo");
     //Al usar la función con una cadena, ademas de indicarnos el tipo, también nos mostrará el número de caracteres.

//?---Variables---
/**
 * *Paraescribir una variable, se deben seguirciertas reglas:
 * 1.) Debe empezar con un signo de dolar "$"
 * 2.) Seguido de un guión bajo "_" o una letra.
 * 3.) El nombre de la variable podrá contener entonces, letras, numeros y guiones bajos.
 */

 //! El nombre de la variable es sensible a las mayusculas y minusculas.

 $var1 = 1;
 $_var2 = "Dos";

 echo $var1, $_var2;

    //?---Estandares de nomeclaturas---
    
    //?---Camel Case---
    /**
     * *UpperCamelCase
     * Este se basa en colocar mayuscula la primera letra de cada palabra, p.e: EjemploPracticoDeVariable.
     * *lowerCamelCase
     * Este es el usado regularmente, similar al anterior, donde la diferencia yace en que la primera letra se escribe en minuscula, p.e: ejemploPracticoDeVariable.
     */

    //?---Upper Case---
    /**
     * En esta nomeclatura TODAS las letras se escriben en mayusculas, p.e: NOMBREDEVARIABLE. Este tipo de nomeclatura se usa más común mente cuando se usan constantes definidas en php.
     */
      
    //?---Snake Case---
    /**
     * Es cuando las palabras se separan con guión bajo "_", p.e: ejemplo_de_variable.
     * *SCREAMING_SNAKE_CASE
     * Es el estandar de snake case, con la diferencia en la que todas las palabras estan escritas en mayusculas, p.e: EJEMPLO_DE_VARIABLE. 
     */

//?---Constantes---
/**
 * Las convenciones para declarar constantes coinciden con las utilizadas para declarar variables, las únicas diferencias son que no llevan el simbolo de dolar "$" y que se suelen escribir en mayusculas.
 */

 const CONSTANTE1 = 12;
 const CONSTANTE2 = "Uno";

 echo CONSTANTE1, CONSTANTE2;

//?---Arreglos---
/**
 * *Tipos de arrays:
 * *Escalares
 * Estos son los arrays comúnes, donde para acceder a sus valores se necesita conocer el indice del valor.
 * *Asociativos
 * Para este tipo de arrays, se necesita de una clave asociada con el elemento. sintaxis clave => valor como argumentos.
 * *Multidimensionales
 * Array cuyos valores son otros arrays, se acceden mediante del uso de indices, con la peculiaridad de que se usan pares de corchetes por cada dimensión que tenga el array. [][] -> 2 dimensiones, [][][] -> 3 dimensiones...
 */

 //Array escalar
 $estudiantes = ["Carlos", "Jose", "Pedro", "Juan"];
 //Al declarar arrays de esta manera, el lenguaje interpreta que se trata de un arreglo de tipo escalar, y por lo tanto, asigna automaticamente valores a los indices.

 $estudiantes[2] = "Maria";

 echo $estudiantes[2];

 //Array asociativo
 $tutor = [
     "nombre" => "Carlos", 
     "apellido" => "Alfaro", 
     "edad" => 27
    ];
 //Observamos como declaramos los valores del array y los asociamos a una clave, la cual tendrá que ser llamada para mostrar su valor a través de esta.

 $tutor["edad"] = 19;

 echo $tutor["nombre"], $tutor["apellido"], $tutor["edad"];

 //Array multidimensional
 $tutor2 = [
    "nombre" => "Vanessa", 
    "apellido" => "Carvajal", 
    "edad" => 24,
    "cursos" => ["PHP", "javaScaript", "HTML", "CSS"]
   ];
 
 $tutor2["cursos"][0] = "javaScript";
 
 echo $tutor2["cursos"][0];

 $tutor2["pais"] = "Venezuela";
 //De esta manera podemos añadir más valores dentro del array.
 //!PHP  coloca los valores nuevos al final del array de manera automatica.

 echo $tutor2["pais"];

   //?---count()---
   /**
    * Esta es una función de php que cuenta el número de valores que hay en un array. Para usarla se requiere que se pase el array como argumento a la función
    */

    echo count($tutor2);

    /**
     * Si queremos que la funsión cuente los valores, inclusives los de arrays multidimensionales. Se debe de pasar como segundo argumento el valor COUNT_RECURSIVE.
     */

     echo count($tutor2, COUNT_RECURSIVE);

//?---Concatenar strings---
/**
 * El operador que se utiliza para concatenar es el punto ".". 
 */

 $miNombre = "Johan";
 $miApellido = "Rodriguez";
 $miPais = "Venezuela";
 $miEdad = 26;

 echo "<br>" . "Hola, mi nombre es " . $miNombre . " " . $miApellido . ". " . "Soy de " . $miPais . " y tengo " . $miEdad . " años." . "<br>";

   //?---Interpolación---
   /**
    * Se refiere a incrustar las variables dentro de cadenas de texto. Esto solo funciona cuando se usan comillas dobles, con las simples no funciona.
    */

    echo "Hola, mi nombre es $miNombre $miApellido. Soy de $miPais y tengo $miEdad años." . "<br>";

//?---Operadores aritmeticos---
/**
 * *php posee los siguientes operadores:
 * suma (+)
 * resta (-)
 * división (/)
 * resto (%)
 * multiplicación (*)
 * potenciación (**)
 */

 $numeroA = 2; 
 $numeroB = 4;

 $numeroA += $numeroB;

 echo $numeroA;

//?---Operadores de asignación---
/**
 * *php posee los siguientes operadores:
 * asignar (=)
 * suma (+=)
 * resta (-=)
 * multiplicación (*=)
 * división (/=)
 * concatenar (.=)
 */

 $pruebaConcatenar = "Mi variable qlera ";
 
 $pruebaConcatenar .= "esta vacia we";

 echo "<br>" . $pruebaConcatenar . "<br>";

   //?---Asignación por referencia---
   /**
    * La asignación por referencia guarda el valor de otra variable, con la diferencia de que si el valor de dicha variable a la cual estamos referenciando, cambia, también lo hará la otra.
    */

    $textoA = "Hola puto";

    $asignacionA = $textoA;
    $asignacionRef = &$textoA;

    echo "Valor de la variable por asignación: $asignacionA. <br>Valor de la variable por referencia: $asignacionRef. <br>";

    $textoA = "jeje te engañe";

    echo "Valor de la variable por asignación: $asignacionA. <br>Valor de la variable por referencia: $asignacionRef. <br>";

//?---Operadores de comparación---
/**
 * *php posee los siguientes operadores:
 * igualdad (==)
 * estricta igualdad (===)
 * diferente (!=)
 * diferente (<>)
 * estrictamente diferente (!==)
 * menor que (<)
 * mayor que (>)
 * menor o igual que (<=)
 * mayor o igual que (>=)
 * *Estos operadores devolveran un "true" (1) o un "false" (0).
 */

 var_dump(1==="1");

//?---Operadores lógicos---
/**
 * *php posee los siguientes operadores:
 * y (and)
 * y (&&)
 * o (or)
 * o (||)
 * no (!)
 * *Nos permiten crear expresiones más complejas y devuelven un valor booleano.
 */

 $valorLogico1 = 3;
 $valorLogico2 = 5;

 var_dump(!($valorLogico1 == 3 && $valorLogico2 < 10 || $valorLogico1 > 3));

//?---Operadores de incremento y decremento---
/**
 * *Nos sirven para incrementar (++) o reducir (--) en 1 el valor de una variable.
 */

 $valorInc = 0;

 echo --$valorInc;
 //Colocar el operador de incremento o decremento antes hace que el incremento ocurra primero, antes de usar la variable.

//?---Estructura condicional---
/**
 * *Estructura simple (if)
 * Evalua un pequeño fragmento de codigo y devuelve un valor booleano, en caso de que el valor sea "true", se ejecutara entonces un bloque de codigo, en caso de que sea "false" se saltara el bloque de codigo.
 */
 
 if(1>0) {
  echo "<br>Es mayor.<br>";
 }
 //Otra sintaxis es:
 if(1>0):
  echo "Ta fea la sintaxis.<br>";
 endif;
 //Usualmente se usa esta sintaxis cuando se trabaja con codigo php incrustado en html, aunque la sintaxis de las llaves tambien sirve igual.

/**
 * *Estructura doble (if-else)
 * En esta estructura si la condición inicial es "false", entonces se ejecuta otro bloque de codigo.
 */

 if(5>10) {
   echo "El numero es mayor.";
 } else {
   echo "El numero es menor.";
 }
 //Sintaxis alternativa
 if(5>10) : 
  echo "El numero es mayor.";
 else: 
  echo "<br>El numero es menor y ta fea la sintaxis.<br>";
 endif;

/**
 * *Operador ternario (a ? b : c)
 * <operador> ? <true value> : <false value>
 */
 //!No se puede usar echo en el operador ternario.

 (1>0) ? $mensaje = "Si es mayor que 0" : $mensaje = "No es mayor que cero";

 echo $mensaje;

/**
 * *Estructura condicional múltiple (if-elseif)
 * Una estructura condicional con multiples condiciones.
 */

 if (0 < 0) {
   echo "Es menor que 0.";
 } elseif (0 > 0) {
   echo "Es mayor que 0.";
 } else {
   echo "Es igual a 0.";
 }

 //Sintaxis alternativa
 if (0 < 0): 
  echo "Es menor que 0.";
 elseif (0 > 0):
  echo "Es mayor que 0.";
 else:
  echo "Es igual a 0.";
 endif;

/**
 * *Estructuras condicionales anidadas
 * Se trata de meter estructuras condicionales dentro de otras. 
 */

 $edad = 55;
 $sexo = "F";

 if ($sexo == "M") {
   if ($edad >= 60) {
     echo "Usted puede jubilarse.";
   } else {
      echo "Usted no cumple con el requisito de edad.";
   }
 } else {
   if ($edad > 54) {
     echo "Usted puede jubilarse.";
   } else {
    echo "Usted no cumple con el requisito de edad.";
   }
 }

//?---Estructura de selección multiple---
/**
 * *Estructura de selección multiple (switch)
 * Estructura que permite seleccionar entre varias opciones.
 */

 $diaS = 9;

 switch ($diaS) {
   case 1:
    echo "Lunes.";
   break;
   case 2:
    echo "Martes.";
   break;
   case 3:
    echo "Miercoles.";
   break;
   case 4:
    echo "Jueves.";
   break;
   case 5:
    echo "Viernes.";
   break;
   case 6:
    echo "Sabado.";
   break;
   case 7:
    echo "Domingo.";
   break;
   default:
   echo "Ingrese un valor valido (1-7)";
 }

/**
 * *Estructura de selección multiple (match)
 * Muy distinta a la estructura switch, entre las diferencias que podemos notar estan: 
 * 1) Que en esta se evalua una comparación de estricta igualdad (===) y no una de comparación (==).
 * 2) También, el resultado de la estructura debe ser almacenado en una variable.
 * 3) Esta se basa en comparar el valor de una variable con los valores de otras variables y asignar luego un valor o instrucción a dicha variable.
 * 4) Para usarse se debe asignar toda la estructura a una variable donde se guardará el resultado.
 */
//!Podemos comparar los valores de la variable con valores que coloquemos del lado de la comparaciñon.
//!Podemos comparar con más de un valor haciendo uso de comas ",".
//!Podemos trabajar con datos  booleanos.

 $abc = "c";

 $x = "a";
 $y = "b";
 $z = "c";

 $res = match ($abc) {
   $x => "La primera letra del abc.",
   $y => "La segunda letra del abc.",
   $z => "La tercera letra del abc.",
   default => "Ingresa un valor valido"
 };

 echo $res . "<br>";

//?---Bucles---
/**
 * *Estructura repetitiva (while)
 * Estructura que repite una acción mientras la condición sea verdadera. 
 */

 $ii = 0;

 while ($ii <= 20) {
   echo $ii . "<br>";
   $ii++;
 }

 //Al igual que las anteriores estructuras de control, posee una sintaxis alternativa, que a partir de ahora omitiré. Si se desea usar, buscarla por su cuenta.

/**
 * *Estructura repetitiva (do-while)
 * Igual a la anterior, con la diferencia de que primero se ejecuta el codigo que esta dentro del bucle y luego se evalua la condición. De esta forma, el codigo SIEMPRE se ejecutará al menos una vez.
 */

 $jj = -10;
 
 echo "El bucle empieza en: $jj." . "<br>";

 do {
   echo $jj + 1 . "<br>";
   $jj++;
 } while ($jj < 0);

 echo "Y termina en: " .  $jj + 1 . "." . "<br>";

 //Esta estructura no posee sintaxis alternativa.

/**
 * *Estructura repetitiva (for)
 * El ciclo for de toda la vida. 
 */
 
 $resA = 0;

 for ($i = 0; $i < 11; $i++) {
   $resA += $i;
   echo $resA . "<br>";

 }

/**
 * *Estructura repetitiva (foreach)
 * Este ciclo solo puede ser usado sobre arrays, si se intenta usar de otra forma emitira un error. Admite hasta tres parametros, dependiendo del tipo de array que usemos (escalar o asociativo).
 */

 $alumnosA = ["Pedro", "Maria", "Monica", "Johan", "Jose"];

 foreach($alumnosA as $key => $value) {
   echo $key . " - " . $value . "<br>";

 }
 //Aqui podemos pasar tres parametros para que nos indique el indice del vector, de otra forma solo mostraria los valores de este.

 $pcComp = [
   "Monitor" => 20,
   "Case" => 100,
   "Mouse" => 5,
   "Keyboard" => 7,
   "Altavoces" => 10
 ];

 foreach ($pcComp as $artPc => $precio ) {
   echo $artPc . " = " . $precio . "<br>";
 }
 //Al ser un array asociativo, es conveniente usar los tres parametros, de esta forma nos queda algo como una lista de precios con su articulo.

/**
 * *Interrumpir y Saltar un ciclo (break-continue)
 * Break se usa para interrumpir un ciclo.
 * Continue se usa para saltar una iteración del codigo.
 */

 for($ij = 0; $ij <= 10; $ij++){
   if($ij % 2 != 0) {
     continue;
   }

   echo $ij . "<br>";
 }

 for($ji = 0; $ji <= 10; $ji++) {
   if($ji == 5) {
     break;
   }
   echo $ji . "<br>";
 }

//?---Incluir archivos---
/**
 * Podemos incluir otros ficheros en nuestros scripts de php
 */

/**
 * *Include
 * Inserta en nuestro script un bloque de codigo que procede de otro archivo, si el otro archivo no existe o si contiene algun tipo de error se mostrará un "warning" por pantalla y el script seguirá ejecutandose. 
 */

 include_once("prueba.php");
 echo "<br>Segunda llamada del include<br>";
 include_once("prueba.php");
 //Al usar include_once, evita que se vuelva a ejecutar el codigo aunque se llame.


/**
 * *Require
 * hace la misma operación que el include, con la diferencia de que si el archivo no existe o si hay un error, mostrará "fatal error" por pantalla y detendra la ejecución del script. 
 */

 require("prueba1.php");
 echo "<br>Segunda llamada del require<br>";
 require("prueba1.php");

 //!Ambos tienen una segunda forma de ser llamadas y es usan "_once" despues del require o include. Esto lo que hace es que el codigo solo se incluye una vez.
 //!Hay dos tipos de sintaxis, con o sin parentesis "()".

//?---Funciones propias---
/**
 * *Crear funciones y llamarlas en el mismo archivo
 * Las funciones de toda la vida. Puedes empezar a escribirlas con una letra o guion bajo (_). En php se declara: 
 * function nombreDeLaFuncion($parametros) {
 *  "codigo";
 *  return;
 * }
 */

 function sumarNumeros($a, $b) {
  return "<br>El resultado de la suma de $a y $b es: " . $a + $b . "<br>";
 }

 $resultadoa = sumarNumeros(3, 5);
 echo $resultadoa;

 $c = 1;
 $d = 3;
 echo sumarNumeros($c, $d);

 echo sumarNumeros($e = 7, $f = 5);
 //Aqui observamos diferentes maneras de mostrar o interactuar con el resultado de las funciones.

/**
 * *Incluir y llamar funciones desde otro archivo
 * Se incluye de igual forma que las anteriores. Con la diferencia de que más adelante hay que llamar a la función y pasar parametros. Podemos usar include o require y sus variaciones con _once.
 */

 include("funcionNotas.php");

 echo "El promedio es: " . promedioNotas(1, 2, 3);
 //!Tener cuidado con los archivos que se incluyen. Aqui tuve un error porque estaba llamando a un archivo externo que ya habia llamado anteriormente para otra practica, por lo tanto, la función esta entregando errores (supongo que por las numerosas llamadas sin declarar).

//?---Funciones predefinidas de php---
/**
 * *Funciones para strings
 */

 $stringPrueba = "Hola mundo";

 echo "El string tiene " . strlen($stringPrueba) . " letras" . "<br>";
 //Tamaño del string
 //!Esta función tambien cuenta los caracteres para hacer salto de linea
 //!NO USAR EL CARACTER DE SALTO DE LINEA DENTRO DEL STRING, MEJOR CONCATENAR AL FINAL CON . "<BR>".

 echo "El string tiene " . str_word_count($stringPrueba) . " palabras" . "<br>";
 //Cuenta el número de palabras del string
 //!Tambien cuenta el caracter de salto de linea como palabra.

 echo strtolower($stringPrueba) . "<br>";
 //Formatear todas las letras a minusculas

 echo strtoupper($stringPrueba) . "<br>";
 //Formatear todas las letras a mayusculas

 echo ucfirst($stringPrueba) . "<br>";
 //Primera letra mayuscula

 echo ucwords($stringPrueba) . "<br>";
 //Primera letra de cada palabra en mayuscula

  /**
   * *Transformar un string en un array
   * Se logra a través de una función usando dos parametros obligatorios y uno opcional: explode(delimitador, string, limitador(opcional));
   * El delimitador es el caracter que identificara la funcion que es el encargado de separar los datos del string.
   * El limitador nos limita en cuentas partes o valores va a estar dividido el array.
   */

   $fecha1 = "03/05/96";
   $fecha2 = "03-05-96";
   $listaA = "huevos harina leche azucar";
   $listaB = "huevos, harina, leche, azucar";

   $arrayFecha1 = explode("/", $fecha1);

   for($ia = 0; $ia <= 2; $ia++ ) {
    echo $arrayFecha1[$ia] . "<br>";
   }

   $arrayListaA = explode(" ", $listaA, 2);

   for($iab = 0; $iab <= 1; $iab++ ) {
    echo $arrayListaA[$iab] . "<br>";
   }
   //Aqui vemos como el indice 0 esta ocupado por huevos, mientras que el indice 1 esta ocupado por todo el resto del string (harina leche azucar).

   $arrayListaB = explode(", ", $listaB, -1);

   for($iab = 0; $iab <= 2; $iab++ ) {
    echo $arrayListaB[$iab] . "<br>";
   }
   //hay que jugar un poco con el delimitador para tener los arrays como se desea.
   //cuando se usa un limitador negativo, se interpreta como, que se va a dividir el string en tantos valores tenga menos el ultimo o los equis numeros negativos.

/**
 * *Funciones matematicas
 * Alguns de las funciones más usadas
 */

 echo pow(2, 3) . "<br>";//el primer argumento es la base y el segundo el exponente.
 echo sqrt(36) . "<br>";//raiz cuadrada.
 echo rand(0,10) . "<br>";//genera un numero aleatorio entre un valor minimo y uno máximo (incluye a los valores extremos).
 echo pi() . "<br>";//funcion que devuelve el valor de pi.
 echo floor(4.9) . "<br>";//esta función redondea los numeros flotantes. Su lógica de acción es si tiene decimales (asi sea mayor a 5) se redondea hacia abajo.
 echo ceil(4.1) . "<br>";//esta función hace lo opuesto a la anterior. Redondea hacia arriba aunque el decimal sea menor a 5.
 echo round(4.567, 1) . "<br>";//esta función redondea los numeros decimales. Si el decimal es <= 4 redonde hacia abajo y si es >= 5 redondea hacia arriba. Adicionalmente, se le puede pasar otro argumento, este indicará el número de decimales que se desea mostrar.

/**
 * *Formatear numeros
 * number_formar(cantidad, decimales, separadorDecimal, separadorMillar);
 * En esta función podemos trabajar con 1, 2 y 4 parametros.
 * !al usar un solo valor, se usará la notación inglesa (se eliminan los decimales redondeando la cantidad usando un round() y el separador de millar es una coma ",").
 */

 echo number_format(53567.9090) . "<br>";
 echo number_format(53567.9090, 2) . "<br>";
 echo number_format(53567.9090, 2, ".", " ") . "<br>";

//?---Fecha y hora---
/**
 * *Fecha en ingles
 */

 date_default_timezone_set("America/Caracas");//Esta función se usa para establecer una zona horaria.

 echo date("d") . "<br>";//muestra la fecha del 01 al 31
 echo date("D") . "<br>";//muestra el día de la semana en ingles, usando tres letras
 echo date("j") . "<br>";//muestra la fecha como el valor "d", pero sin ceros iniciales
 echo date("l") . "<br>";//muestra el día de la semana en ingles completo
 echo date("Y-m-d") . "<br>";//Ejemplo de como usar la función de manera combinada usando diferentes parametros. Los caracteres que no reconozca la función los retornará tal como estan, por lo tanto podemos darle nosotros mismos el formato. 
 //!Revisar la documentación para ver más parametros de la función. 
 echo date("h:i a") . "<br>";//Ejemplo de la hora

 //!Si quieres la fecha en español tendras que hacer una función para traducirla.
 //!Usando la función strtotime(valor); podemos transformar un string en una fecha con el formato del string. date("fechaString", strtotime($fechaString));
 
//?---Encriptar contraseñas---
/**
 * *Hash 
 * es un algoritmo matemático que transforma cualquier bloque de datos en una nueva serie de caractéres de longitud fija. Independientemente de la cantidad de caracteres de entrada, siempre tendrá una cantidad fija de caracteres de salida.
 */

 $passEx = "HolaMundo123";

 echo md5($passEx) . "<br>";
 echo sha1($passEx) . "<br>";
 //De los metodos de encriptación más antiguos. Generan cadenas de números y letras minusculas unicamente. 
 //!Debido al poder de computo de la actualidad, es desacobcejable usar estas funciones porque son facilmente decifradas.

/**
 * *hash();
 * es una función que admite dos parametros. El primero es el nombre del algoritmo de codificación y el segundo es el string. hash("md5", $contraseña);
 * Esta función funciona con muchisimos algoritmos de encriptación.
 */
/**
 * *password_hash();
 * Esta es la función recomendada para generar hashes seguros debido a dos factores. 1) los hashes son más complejos y 2) no son fijos, cada vez que se recarguen serán diferentes.
 * Esta admite más parámetros. La cadena que se quiere encryptar, el tipo de algoritmo (PASSWORD_DEFAULT y PASSWORD_BCRYPT) y el coste, el cual se accesede a traves de un array ["cost"=>10] (10 es el coste predeterminado).
 */

 $passExHash= password_hash($passEx, PASSWORD_DEFAULT);
 echo $passExHash . "<br>";
 //!el algoritmo debe estar en mayuscula.

/**
 * *password_verify();
 * Esta función sirve para verificar que sea un hash valido generado por la función password_hash. 
 * Admite dos parametros, el primero será la cadena original y el segundo será el hash generado por el password_hash. Devuelve un true o false.
 */

 echo password_verify($passEx, $passExHash) . "<br>";

//?---Formularios con php---
/**
 * 
 */

 

?>
