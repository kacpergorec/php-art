# php-art

A library for generating generative art in PHP.

## Purpose

The purpose of this library is to generate generative art for use as thumbnails on a personal blog. Eventually, it will
be pushed to packagist for others to use.

## Usage

```php
$art = ArtCanvas::new();

echo $art
        ->rollShapesInRange(Circle::class, 2, 5)
        ->rollShapesInRange(Rect::class, 2, 5)
        ->scrambleShapesOrder()
        ->make()
    ;
```

## Requirements

    PHP 8.1 or later.

## Installation

~~You can install the library using Composer by running the following command:~~

Not yet.

```shell
composer require kacpergorec/art-canvas
```

## Contributions

Any contributions are welcome! Simply fork the repository, make your changes, and open a pull request.