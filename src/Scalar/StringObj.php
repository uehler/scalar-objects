<?php
declare(strict_types=1);

namespace Scalar;

class StringObj extends Scalar
{
    public function __construct(string $string)
    {
        $this->value = $string;
    }


    public function getValue(): string
    {
        return $this->value;
    }


    public function strtolower()
    {
        return new StringObj(strtolower($this->value));
    }


    public function strtoupper()
    {
        return new StringObj(strtoupper($this->value));
    }
}