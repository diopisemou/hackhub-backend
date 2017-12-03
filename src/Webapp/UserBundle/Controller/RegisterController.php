<?php

namespace Webapp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegisterController extends Controller
{
    public function indexAction()
    {
        return $this->render('@WebappUser/Default/register.html.twig');
    }
}
