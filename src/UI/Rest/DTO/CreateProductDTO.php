<?php

namespace App\UI\Rest\DTO;

use App\Domain\Entity\Product;

class CreateProductDTO
{
    public function __construct(
        public int    $id,
        public string $name,
        public string $image
    )
    {
    }
    public static function fromProduct(Product $product): self
    {
        return new self(
            $product->getId(),
            $product->getName(),
            $product->getImage()
        );
    }
}