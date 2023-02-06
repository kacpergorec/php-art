<?php
/**
 * @var ArtCanvas $canvas
 */

use KacperGorec\PhpArt\ArtCanvas;

?>

<svg
        width="<?= $canvas->width ?>"
        height="<?= $canvas->height ?>"
        style="background: <?= $canvas->palette->background ?>"
>

    <defs>
        <?php foreach ($canvas->defs as $canvas->def): ?>
            <?= $canvas->def ?>
        <?php endforeach; ?>
        <filter id="blob">
            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
        </filter>
    </defs>

    <?php foreach ($canvas->shapes as $shape) {
        echo $shape;
    } ?>
</svg>
