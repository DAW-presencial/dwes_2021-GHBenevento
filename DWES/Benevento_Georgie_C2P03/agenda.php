<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Agenda </title>
    <link rel="stylesheet" href="agenda.css"> <!-- archivo de CSS externo -->
</head>

<body>

    <header>
        <h1>Contacts</h1>
    </header>

    <?php

    $name = "";    //Declaramos las variables para el nombre introducido
    $num = "";     //Declaramos las variables para el numero introducido

    $info = [];    //Declaramos un array vacio que contendra la informacion enviada por submit

    if (isset($_GET["submit"]) === true) {    //Asegura que no se imprima los contactos hasta hace el primer submit

        $info = $_GET["contact"];    // Cogemos nuestro listao de contactos
        $name = $_GET["name"];       // Cogemos los valores que se hayan introducido en "name" y lo asignamos a nuestra varibable
        $num = $_GET["num"];         // Cogemos los valores que se hayan introducido en "num" y lo asignamos a nuestra varibable

        if ($_GET["name"][0] === "") { // En caso de que no se haya introducido un valor en el campo "name" salta una advertencia
            echo "<span class='err'>Please write a name</span>";
        } else {
            if ($num[0] === "") {    // Si no se introduce un numero, miramos si existe el nombre y si es asi se borra los datos de ese contacto
                foreach ($info as $currentName => $phone) {
                    if ($name[0] === $currentName) {
                        unset($info[$currentName]);
                        break;
                    }
                }
            } else {
                $info = nameNumber($info, $name, $num); //Si se ha introducido un nombre y un numero se llamara a la funcion nameNumber
            }
        }
    }
    ?>

    <div class="form">  <!--Creamos un formulario-->
        <form>
            Name: <input name="name[]" type="text" />
            Phone number: <input name="num[]" type="text" />
            <?php
            saveContact($info); // Ejecutamos la funcion saveContact para que no se sobreescriban los datos
            ?>
            <input class="button" type="submit" name="submit" value="Save this contact" />
        </form>
    </div>

    <h3>Contacts:</h3>

    <?php

    printInfo($info);        //Llamamos a la funcion que nos imprime los contactos


    //Funciones

    function nameNumber($info, $name, $num)
    { //Asignamos el valor del numero al valor del nombre
        $info[$name[0]] = $num[0];
        return $info;
    }

    function saveContact($info)
    {  //Guardamos toda nuestra informacion de contactos

        foreach ($info as $currentName => $phone) {
    ?>
            <input type="hidden" name="contact[<?= $currentName ?>]" value="<?= $phone ?>">
    <?php
        }
    }

    function printInfo($info)
    {  // Funcion que imprime los datos por pantalla en una lista

        $list = "<ul>";        // Abrimos la etiqueta del listado

        foreach ($info as $currentName => $phone) { // Creamos un "list element" por cada contacto
            $list .= "<li> <span> Name: </span>" . $currentName . " <br><span>  Phone number: </span>" . $phone . "</li>";
        }

        $list .= "</ul>";     // Cerramos la etiqueta del listado

        echo $list;          // Imprimimos los resultados
    }

    ?>
</body>

</html>