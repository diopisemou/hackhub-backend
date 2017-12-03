<?php

namespace Webapp\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DetailsController extends Controller
{
    public function indexAction()
    {
        return $this->render('@WebappProject/Default/index.html.twig');
    }
}
