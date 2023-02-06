<?php
declare (strict_types=1);

namespace KacperGorec\PhpArt\Shape;

use KacperGorec\PhpArt\ArtCanvas;

abstract class AbstractShape
{
    protected const MIN_SHAPE_SIZE = 20;

    protected ArtCanvas $canvas;

    public function __construct(ArtCanvas $context)
    {
        $this->canvas = $context;
    }

    public function randomSize(){

        $size = random_int(self::MIN_SHAPE_SIZE, $this->canvas->getSmallestDimension() / 2);

        return (int)($size * $this->canvas->shapeSizeMultiplier);
    }
}
