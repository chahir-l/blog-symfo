<?php

namespace App\Controller\Front;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{

    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;

    }

    /**
     * @Route("/products", name="products_list")
     *
     * @return Response
     */
    function list(): Response {

        return $this->render(
            "product/list.html.twig",
            $this->postRepository->findAll()

        );
    }

}
