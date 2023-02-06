<?php
declare (strict_types=1);

namespace KacperGorec\PhpArt\Palette;

class Palette
{

    public array $linearGradients = [];
    public array $radialGradients = [];

    public function __construct(
        public string $primary,
        public string $secondary,
        public string $background,
        public string $accent,
    )
    {
    }

    public function addLinearGradient(string $gradient)
    {
        $this->linearGradients[] = $gradient;
    }

    public function addRadialGradient(string $gradient)
    {
        $this->radialGradients[] = $gradient;
    }
}
