<?php

namespace Webapp\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectController extends Controller
{
    public function addAction()
    {
        return $this->render('@WebappProject/Default/index.html.twig');
    }
}
