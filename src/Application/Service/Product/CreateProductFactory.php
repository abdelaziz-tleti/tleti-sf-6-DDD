<?php

namespace App\Application\Service\Product;

use App\Domain\Entity\Product;

class CreateProductFactory
{
    private CreateProductHandler $createProductHandler;

    public function __construct(CreateProductHandler $createProductHandler)
    {
        $this->createProductHandler = $createProductHandler;
    }

    public function create(string $name, string $image): Product
    {
        return $this->createProductHandler->create($name, $image);
    }
}