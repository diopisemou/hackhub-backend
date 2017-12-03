<?php

namespace Webapp\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebappProjectBundle:Default:index.html.twig');
    }
}
