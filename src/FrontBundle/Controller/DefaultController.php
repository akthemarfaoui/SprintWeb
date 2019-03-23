<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Front/Default/index.html.twig');
    }
    public function layoutAction()
    {
        return $this->render('@Front/layout.html.twig');
    }
}
