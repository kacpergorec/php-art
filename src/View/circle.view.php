<?php
/** @var Circle $circle */
use KacperGorec\PhpArt\Shape\Circle;
?>

<circle
        r="<?= $circle->radius ?>"
        style="fill: <?= $circle->canvas->palette->secondary ?>;"
        cx="<?= $circle->position['x'] ?>"
        cy="<?= $circle->position['y'] ?>"
/>
