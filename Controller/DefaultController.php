<?php

namespace Karudev\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KarudevProductBundle:Default:index.html.twig');
    }
}
