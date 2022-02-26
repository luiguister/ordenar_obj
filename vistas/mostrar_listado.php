<?php
 //var_dump($listado_persona);die;
?>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
    </tr>
    <?php
        foreach ($lista_ordenada as $persona) {
            echo '<tr>';
            echo '<td>'.$persona->id.'</td>';
            echo '<td>'.$persona->nombre.'</td>';
            echo '<td>'.$persona->apellido.'</td>';
            echo '<td>'.$persona->edad.'</td>';
            echo '</tr>';
        }
    ?>
</table>


