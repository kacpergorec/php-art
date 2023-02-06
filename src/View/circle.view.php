<circle
        r="<?= $radius ?>"
        style="fill: <?= $canvas->palette->secondary ?>;filter:url(#blob);"
        cx="<?= random_int($radius, $canvas->width - $radius) ?>"
        cy="<?= random_int($radius, $canvas->height - $radius) ?>"
/>
