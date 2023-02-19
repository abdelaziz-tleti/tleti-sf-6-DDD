<?php

namespace App\UI\Rest\Controller\Product;

use App\Application\Command\Product\CreateProductCommandHandler;
use App\Application\Command\Product\Request\CreateProduct as RequestCreateProduct;
use App\Infrastructure\ParamConverter\CreateProductConverter;
use App\UI\Rest\DTO\CreateProductDTO;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateProductAction extends AbstractController
{

    public function __construct()
    {
    }

    #[Route('/api/products', name: 'app_product_post', methods: ['GET'])]
    #[OA\Response(
        response: 201,
        description: 'Created'
    )]
    #[OA\RequestBody(content: new OA\JsonContent(ref: "#/components/schemas/Product"))]
    #[OA\Tag(name: 'Product')]
    public function __invoke(): JsonResponse
    {

        return new JsonResponse('ok', Response::HTTP_CREATED);
    }
}