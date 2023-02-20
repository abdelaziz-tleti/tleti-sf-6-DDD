<?php

namespace App\Infrastructure\Repository;

use App\Domain\Entity\Product;
use App\Domain\Repository\ProductRepositoryInterface;
use App\Infrastructure\Common\Pagination\Paginator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProductRepository extends ServiceEntityRepository implements ProductRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function save(Product $entity, bool $flush = true): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function list(int $page, int $limit): array
    {
        $query = $this->createQueryBuilder(
            'product'
        );
       // $paginator = $this->paginator->paginate($query->getQuery(), $page, $limit);

        return []; //  $paginator->getResult();
    }
    public function find($id, $lockMode = null, $lockVersion = null):Product
    {
        return parent::find($id, $lockMode, $lockVersion);
    }
}

