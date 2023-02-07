<?php
/** @var ArtCanvas $canvas */
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
    </defs>

    <?php foreach ($canvas->shapes as $shape) {
        echo $shape;
    } ?>
</svg>
