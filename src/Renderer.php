<?php
declare (strict_types=1);

namespace KacperGorec\PhpArt;

class Renderer
{
    private const VIEW_EXTENSION = '.view.php';

    public static function view(string $view, array $data = []): string
    {
        extract($data, EXTR_OVERWRITE);

        ob_start();
        include __DIR__ . '/View/' . $view . self::VIEW_EXTENSION;
        return ob_get_clean();
    }
}
