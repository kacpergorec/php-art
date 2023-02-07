<?php
declare (strict_types=1);

namespace KacperGorec\PhpArt\Shape;

use KacperGorec\PhpArt\Renderer;

class Circle extends AbstractShape
{

    public int $radius;

    public function __toString(): string
    {
        $this->radius = $this->randomSize();
        $this->position = $this->randomPosition($this->radius);

        return Renderer::view('circle', [
            'circle' => $this,
        ]);
    }

}
