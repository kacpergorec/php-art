<?php
/** @var Rect $rect */
use KacperGorec\PhpArt\Shape\Rect;
?>

<rect
        width="<?= $rect->width ?>"
        height="<?= $rect->height ?>"
        style="fill: <?= $rect->canvas->palette->primary ?>;"
        x="<?= $rect->position['x'] ?>"
        y="<?= $rect->position['y'] ?>"
/>
