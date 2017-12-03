<?php

namespace Webapp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@WebappUser/Default/index.html.twig');
    }
}
