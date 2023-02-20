<?php

namespace App\Tests\Domain\Entity;

use App\Domain\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testGetters()
    {
        $product = new Product();
        $product->setName($name = 'user 1');
        $product->setImage($image = 'www.host.com/img.png');

        self::assertEquals($name, $product->getName());
        self::assertEquals($image, $product->getImage());
        self::assertNull($product->getId());
    }
}