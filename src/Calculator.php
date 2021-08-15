<?php

namespace Sankii\Bilog;

class Calculator {

    private $result;

    public function __construct()
    {
        $this->result = 0;
    }

    public function add($value)
    {
        $this->result += $value;

        return $this;
    }
    public function subtract($value)
    {
        $this->result -= $value;

        return $this;
    }
    public function clear()
    {
        $this->result = 0;

        return $this;
    }

    public function getResult(){
        return $this->result;
    }
}