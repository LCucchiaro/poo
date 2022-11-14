<?php

namespace Gaudileo\Biggie;

class Padre
{
    protected string $name;

    /**
     * Se ejecuta cuando se instancia un objeto de esta clase
     */
    public function __construct()
    {
     $this->name = "padre";
    }


    public function hello()
    {
        return "Hola soy tu $this->name";
    }

}