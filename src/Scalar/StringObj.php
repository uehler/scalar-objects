<?php declare(strict_types=1);

namespace Scalar;

use function explode;
use function str_replace;
use function strlen;

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


    public function toLower(): StringObj
    {
        return new StringObj(strtolower($this->value));
    }


    public function toUpper(): StringObj
    {
        return new StringObj(strtoupper($this->value));
    }


    public function length(): int
    {
        return strlen($this->value);
    }


    public function explode(string $delimiter): array
    {
        return explode($delimiter, $this->value);
    }


    public function append(string $string): StringObj
    {
        return new StringObj($this->value . $string);
    }


    public function prepend(string $string): StringObj
    {
        return new StringObj($string . $this->value);
    }


    public function replace(string $stringToReplace, string $replacement): StringObj
    {
        return new StringObj(str_replace($stringToReplace, $replacement, $this->value));
    }
}
