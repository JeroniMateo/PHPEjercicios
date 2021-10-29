<?php

class ClaseVarMagic{
    public $publica;
    private $privada1;
    private $privada2;
    private $privada3;
    protected $protegida;

    public function __get($name) {
        if(property_exists($this,$name)){
        echo "Get:$name";
        return $this->$name;
        }
    }

    public function __set($name, $value) {
        if(property_exists($this,$name)){
            if($name== "privada1"||$name=="privada3"){
        echo "Set:$name to $value";
        $this->$name = $value;
            }
    }
}
}

?>