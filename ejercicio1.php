<!-- Aquí declaramos un string y lo imprimimos -->

<?php
    echo "Esto en un mensaje realizado con: echo"; //Echo puede imprimir MÁS DE UNA cadena separadas poe coma.
    print_r("Este es un mensaje realizado con: print_r");  //print_r no imprime nada visible para false y cadenas vacías.
    print("Este es un mensaje realizado con: print"); // print imprime UNA cadena

    // TAMBIÉN ESTÁ var_dump que sirve para imprimir información más detallada sobre un array, la diferencia con print_r a continuación:
    /* 
        $foo = array( 5, 0.0, "Hola", false, '' );

        var_dump( $foo );
        //Imprime
        array(5) {
            [0]=> int(5)
            [1]=> float(0)
            [2]=> string(4) "Hola"
            [3]=> bool(false)
            [4]=> string(0) ""
        }

        print_r( $foo );
        //Imprime
        Array (
            [0] => 5
            [1] => 0
            [2] => Hola
            [3] =>
            [4] =>
        )
    */ 
?>