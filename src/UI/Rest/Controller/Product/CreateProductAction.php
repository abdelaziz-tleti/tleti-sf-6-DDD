<?php

namespace App\UI\Rest\Controller\Product;

use App\Application\Command\Product\Handler\CreateProductCommandHandler;
use App\Application\Command\Product\Request\CreateProductRequest as RequestCreateProduct;
use App\Infrastructure\ParamConverter\CreateProductConverter;
use App\UI\Rest\DTO\CreateProductDTO;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateProductAction extends AbstractController
{

    public function __construct(private CreateProductCommandHandler $handler)
    {
    }

    #[Route('/api/products', name: 'app_product_post', methods: ['POST'])]
    #[OA\Response(
        response: 201,
        description: 'Created'
    )]
    #[OA\RequestBody(content: new OA\JsonContent(ref: "#/components/schemas/Product"))]
    #[OA\Tag(name: 'Product')]
    #[CreateProductConverter('requestCreateProduct')]
    public function __invoke(RequestCreateProduct $requestCreateProduct): JsonResponse
    {
        $product = $this->handler->handle($requestCreateProduct);

        return new JsonResponse($product, Response::HTTP_CREATED);
    }
}
