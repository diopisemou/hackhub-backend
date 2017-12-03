<?php

namespace Webapp\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@WebappApiBundle/Default/index.html.twig');
    }
}
