<?php
declare (strict_types=1);

namespace KacperGorec\PhpArt\Shape;

use KacperGorec\PhpArt\Renderer;

class Rect extends AbstractShape
{

    private int $width;
    private int $height;

    public function __toString(): string
    {
        $this->width = $this->randomSize();
        $this->height = $this->randomSize();

        return Renderer::view('rect', [
            'width' => $this->width,
            'height' => $this->height,
            'canvas' => $this->canvas
        ]);
    }
}
