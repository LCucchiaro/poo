<?php

namespace Gaudileo\Biggie;

class Main
{
    private Padre $objeto;
public function main()
    {
        $this->objeto = new Padre();
        echo $this->objeto->hello();
        $this->objeto = new Hijo();
        echo $this->objeto->hello();
    }


}