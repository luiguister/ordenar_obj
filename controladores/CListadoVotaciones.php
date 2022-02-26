<?php
require_once './res/Persona.php';
require_once './res/OrdenBusqueda.php';
class CListadoVotaciones {    
    public function inicializar() {
        if(isset($_SESSION['listado_personas'])){
            $listado_persona    =  unserialize($_SESSION['listado_personas']);
        }else{
            $listado_persona    =array();
        }
        include './vistas/formulario_registro.php';
        if(isset($_GET['op'])){
            if($_GET['op']=='registrar'){
                $id =  filter_input(INPUT_POST, 'id',FILTER_SANITIZE_NUMBER_INT);
                $nombre =  filter_input(INPUT_POST, 'nombre',FILTER_SANITIZE_STRING);
                $apellido =  filter_input(INPUT_POST, 'apellido',FILTER_SANITIZE_STRING);
                $edad=  filter_input(INPUT_POST, 'edad',FILTER_SANITIZE_NUMBER_INT);
                
                $per            =new Persona();
                $per->id        =$id;
                $per->nombre    =$nombre;
                $per->apellido  =$apellido;
                $per->edad      =$edad;
                    
                $listado_persona[]  =$per;
                $_SESSION['listado_personas']   =  serialize($listado_persona);                                
            }
        }
        
        $ord    =new OrdenBusqueda();
        $valor = $_POST['group1'];
        $valor2 = $_POST['group2'];
        $lista_ordenada =$ord->$valor2($listado_persona, 0, count($listado_persona)-1,$valor);    
                    //$lista_ordenada =$ord->selectionsort($listado_persona, count($listado_persona),$valor);
        include './vistas/mostrar_listado.php';
    }
}



