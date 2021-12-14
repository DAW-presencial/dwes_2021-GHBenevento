
<?php

    function factor($num){

        $fact = 1;

        for ($i=1; $i <= ($num); $i++) { 
            $fact = $fact * $i;
        }
        return $fact;
    }

    function factorial($n){
        if ($n ==1){
            return 1;
        }
        return $n * factorial($n-1);

    }

    echo "Esto es el factorial de 6: " .factor(6);

        $funcs = get_defined_functions();
        echo count( $funcs ['internal'] );
   
?>
