<?php declare(strict_types=1);

namespace Scalar;

abstract class Scalar
{
    /**
     * @var string|int|float
     */
    protected $value;


    abstract public function getValue();
}
