<?php

namespace App\Application\Command\Product\Handler;

use App\Application\Command\Product\Request\CreateProductRequest;
use App\Application\Service\Product\CreateProductFactory;
use App\Domain\Entity\Product;
use App\Domain\Repository\ProductRepositoryInterface;

class CreateProductCommandHandler
{
    public function __construct(
        private readonly CreateProductFactory $createProductFactory,
    ) {
    }

    public function handle(CreateProductRequest $createProductRequest): Product
    {
        $product = $this->createProductFactory->create(
            $createProductRequest->getName(),
            $createProductRequest->getImage()
        );

        return $product;
    }
}
