<?php

namespace App\Controller;

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

}
