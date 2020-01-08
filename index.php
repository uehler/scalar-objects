<?php declare(strict_types=1);

use Scalar\StringObj;

require_once __DIR__ . '/autoload.php';

$string = new StringObj('hallo welt');


print_r($string);
echo "\n";
print_r($string->toUpper()->getValue());
echo "\n";
print_r($string->toLower()->getValue());
echo "\n";
