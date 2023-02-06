<?php
declare (strict_types=1);

namespace KacperGorec\PhpArt\Palette;

enum DefaultPalette
{
    case DEFAULT;
    case LIGHT;
    case SPICY;

    public function palette(): Palette
    {
        return match ($this) {
            self::DEFAULT => new Palette('#913175', '#CD5888', '#20262E','#E9E8E8'),
            self::LIGHT => new Palette('#FF6600', '#FFFFCC', '#FF9933','#E9E8E8'),
            self::SPICY => new Palette('#3399FF', '#CCFFFF', '#66CCFF','#E9E8E8'),
        };
    }
}
