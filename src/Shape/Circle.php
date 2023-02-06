<?php
declare (strict_types=1);

namespace KacperGorec\PhpArt\Shape;

use KacperGorec\PhpArt\Renderer;

class Circle extends AbstractShape
{

    private int $radius;

    public function __toString(): string
    {
        $this->radius = (int)(random_int(self::MIN_SHAPE_SIZE, $this->canvas->getSmallestDimension() / 2) * $this->canvas->shapeSizeMultiplier);

        return Renderer::view('circle', [
            'radius' => $this->radius,
            'canvas' => $this->canvas
        ]);
    }
}
