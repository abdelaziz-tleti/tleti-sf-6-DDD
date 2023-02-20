<?php

namespace App\Application\Service\Product;

use App\Domain\Entity\Product;

class CreateProductHandler
{
    public function create(string $name, string $image): Product
    {
        return (new Product())->setName($name)->setImage($image);
    }
}
