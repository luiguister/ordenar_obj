<?php session_start();?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ordenamiento quick sort en arreglos con objetos</title>
    </head>
    <body>
        <?php
            require_once './controladores/CListadoVotaciones.php';
            $cLV    =new CListadoVotaciones();
            $cLV->inicializar();
//            require_once './res/Persona.php';
//            $per    =new Persona();
//            $per->id=1;
//            $per->nombre='Fulano';
//            $per->apellido='De tal';
//            $per->edad='105';            
        ?>
    </body>
</html>





