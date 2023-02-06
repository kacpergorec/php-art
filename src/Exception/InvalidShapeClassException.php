<?php
declare (strict_types=1);

namespace KacperGorec\PhpArt\Exception;

use Exception;

class InvalidShapeClassException extends Exception
{

    public function __construct(
        $message = "Given class name does not implement AbstractShape",
        $code = 400,
        $previous = null
    )
    {
        parent::__construct($message, $code, $previous);
    }
}
