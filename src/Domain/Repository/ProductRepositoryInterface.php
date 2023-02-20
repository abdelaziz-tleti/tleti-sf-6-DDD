<?php

namespace App\Domain\Repository;

use App\Domain\Entity\Product;

interface ProductRepositoryInterface
{
    public function save(Product $product): void;
    public function list(int $page,int $limit): array;
    public function find(int $id,int|null $lockMode, int|null $lockVersion): Product;
}