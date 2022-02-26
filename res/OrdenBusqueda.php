<?php
class OrdenBusqueda {
    public function quicksort(&$A, $izq, $der,$condicional){
        $i = $izq;
        $j = $der;
        $x = $A[ ($izq + $der) /2 ]->$condicional;// Seleccione un elemento para actuar 
                                   //como punto de pivote 
        //Bucles y comparar cada elemento de la matriz con el valor de pivote.
        do{            
            while( ($A[$i]->$condicional < $x) && ($j <= $der) ){
                $i++;//busca elemento mayor que pivote
            }
            while( ($x < $A[$j]->$condicional) && ($j > $izq) ){
                $j--; // busca elemento menor que pivote
            }            
            if( $i <= $j ){// si no se han cruzado               
                $aux = $A[$i];
                $A[$i] = $A[$j];
                $A[$j] = $aux;
                $i++;  $j--; // los intercambia
            }
        }while( $i <= $j );
        //recursividad
        if( $izq < $j )
            $this->quicksort( $A, $izq, $j,$condicional );// ordenamos subarray izquierdo
        if( $i < $der )
            $this->quicksort( $A, $i, $der,$condicional );// ordenamos subarray derecho 
        return $A;
    }
    public function selection($A,$n,$condicional)
    {
        for ($i=0; $i<$n-1; $i++)
    {
              $min=$i;
              for($j=$i+1; $j<$n; $j++)
                    if($A[$min]->$condicional > $A[$j]->$condicional)
                       $min=$j;
              $aux=$A[$min]->$condicional;
              $A[$min]->$condicional=$A[$i]->$condicional;
              $A[$i]->condicional=$aux ;
        }
 
      return $A;
    }
 
}
