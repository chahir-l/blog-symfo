<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin", name="admin_")
 */
class IndexController extends AbstractController
{

    public function __construct(
    ) {

    }

    /**
     *@Route("", name="admin")
     *
     * @return void
     */
    public function index()
    {
        return $this->render('admin/index/index.html.twig');
    }
}
