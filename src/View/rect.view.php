<rect
        width="<?= $width ?>"
        height="<?= $height ?>"
        style="fill: <?= $canvas->palette->primary ?>;filter:url(#blob);"
        x="<?= random_int($width, $canvas->width - $width) ?>"
        y="<?= random_int($height, $canvas->height - $height) ?>"
/>