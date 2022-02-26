<?php
class Persona {
    private $id;    
    private $nombre;    
    private $apellido;    
    private $edad;    
    public function __get($name) {
        if(property_exists($this, $name)){
            return $this->$name;
        }else{
            return NULL;
        }
    }
    public function __set($name, $value) {
        if(property_exists($this, $name)){
            $this->$name    =$value;
        }
    }
}




