<?php

require_once '../vendor/autoload.php';

use KacperGorec\PhpArt\ArtCanvas;
use KacperGorec\PhpArt\Shape\Circle;
use KacperGorec\PhpArt\Shape\Rect;


$art = ArtCanvas::new();

echo $art
    ->setShapeSizeMultiplier(0.8)
    ->rollShapesInRange(Circle::class, 1,2)
    ->rollShapesInRange(Rect::class, 2,4)
    ->make();
