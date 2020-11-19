<?php

namespace App\Controller\Front;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{

    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;

    }

    /**
     * @Route("/categories", name="categories_list")
     *
     * @return Response
     */
    function list(): Response {

        return $this->render(
            "category/list.html.twig",
            $this->categoryRepository->findAll()

        );
    }

}
