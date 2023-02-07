<?php
declare (strict_types=1);

namespace KacperGorec\PhpArt\Shape;

use KacperGorec\PhpArt\ArtCanvas;

abstract class AbstractShape
{
    private const MIN_SHAPE_SIZE = 20;

    public ArtCanvas $canvas;

    public array $position;

    public function __construct(ArtCanvas $context)
    {
        $this->canvas = $context;
    }

    protected function randomSize()
    {

        $size = random_int(self::MIN_SHAPE_SIZE, $this->canvas->getSmallestDimension() / 2);

        return (int)($size * $this->canvas->shapeSizeMultiplier);
    }

    protected function randomPosition(int $width, int $height = null): array
    {
        if (null === $height) {
            $height = $width;
        }

        return [
            'x' => random_int($width, $this->canvas->width - $width),
            'y' => random_int($height, $this->canvas->height - $height)
        ];
    }

}
