<?php

namespace Webapp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('@WebappUser/Default/login.html.twig');
    }
}
