<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    public function __construct()
    {

    }

    /**
     * @Route("/", name="index")
     *
     * @return void
     */
    public function index()
    {
        return $this->render('index/index.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     *
     * @return void
     */
    public function contact()
    {
        return $this->render('index/contact.html.twig');
    }

    public function renderMenu(CategoryRepository $categoryRepository)
    {

        return $this->render(
            'part/category_menu_part.html.twig',
            array('categories' => $categoryRepository->findAll())
        );
    }

}
