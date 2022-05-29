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

    echo "Hola, mi nombre es $miNombre $miApellido. Soy de $miPais y tengo $miEdad años.";

?>
