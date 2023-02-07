<?php
/** @var ArtCanvas $canvas */

use KacperGorec\PhpArt\ArtCanvas;

?>

<svg
        width="<?= $canvas->width ?>"
        height="<?= $canvas->height ?>"
>
    <defs>
        <?php foreach ($canvas->defs as $canvas->def): ?>
            <?= $canvas->def ?>
        <?php endforeach; ?>
    </defs>
    <rect width="100%" height="100%" fill="<?= $canvas->palette->background ?>"/>
    <?php foreach ($canvas->shapes as $shape) {
        echo $shape;
    } ?>
</svg>
