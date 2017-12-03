<?php

namespace Webapp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebappUserBundle:Default:index.html.twig');
    }
}
