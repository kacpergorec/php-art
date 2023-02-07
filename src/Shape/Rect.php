<?php
declare (strict_types=1);

namespace KacperGorec\PhpArt\Shape;

use KacperGorec\PhpArt\Renderer;

class Rect extends AbstractShape
{

    public int $width;
    public int $height;

    public function __toString(): string
    {
        $this->width = $this->randomSize();
        $this->height = $this->randomSize();

        $this->position = $this->randomPosition($this->width, $this->height);

        return Renderer::view('rect', [
            'rect' => $this,
        ]);
    }
}
