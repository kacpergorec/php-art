<?php
declare (strict_types=1);

namespace KacperGorec\PhpArt;

use KacperGorec\PhpArt\Exception\InvalidShapeClassException;
use KacperGorec\PhpArt\Palette\DefaultPalette;
use KacperGorec\PhpArt\Palette\Palette;
use KacperGorec\PhpArt\Shape\AbstractShape;
use KacperGorec\PhpArt\Shape\Circle;
use KacperGorec\PhpArt\Shape\Rect;

class ArtCanvas
{
    public int $width;

    public int $height;

    public array $defs = [];

    public array $shapes = [];

    public float $shapeSizeMultiplier = 1;

    public Palette $palette;

    public int $shapeStroke = 0;

    public static function new(int $width = 320, int $height = 240): self
    {
        return new self($width, $height);
    }

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function make(): string
    {
        if (!isset($this->palette)) {
            $this->palette = DefaultPalette::DEFAULT->palette();
        }

        return Renderer::view('art', [
            'canvas' => $this
        ]);
    }

    public function getSmallestDimension(): int
    {
        return min($this->width, $this->height);
    }

    public function rollRandomShapesInRange(int $min, int $max = 1): self
    {
        return $this->rollShapesInRange($this->rollShape(), $min, $max);
    }


    public function rollShapesInRange($shapeClass, int $min, int $max = 1): static
    {

        if (!is_subclass_of($shapeClass, AbstractShape::class)) {
            throw new InvalidShapeClassException('Shape must be an AbstractShape instance.');
        }

        $shape = new $shapeClass($this);

        for ($i = $min; $i <= random_int($min, $max); $i++) {
            $this->shapes[] = $shape;
        }

        return $this;
    }

    public function rollShape(): AbstractShape
    {
        $allowedShapes = ['circle', 'rect'];

        return match ($allowedShapes[array_rand($allowedShapes)]) {
            'circle' => new Circle($this),
            'rect' => new Rect($this),
        };
    }

    public function scrambleShapesOrder(): self
    {
        shuffle($this->shapes);

        return $this;
    }

    public function setPalette(Palette $palette): self
    {
        $this->palette = $palette;

        return $this;
    }

    public function setShapeSizeMultiplier(float $shapeSizeMultiplier): self
    {
        $this->shapeSizeMultiplier = $shapeSizeMultiplier;

        return $this;
    }

    public function setShapeStroke(int $widthUnits) : self
    {
        $this->shapeStroke = $widthUnits;

        return $this;
    }
}
