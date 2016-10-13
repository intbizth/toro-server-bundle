<?php

namespace Toro\Bundle\ServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ToroServerBundle:Default:index.html.twig');
    }
}
