<?php

namespace giveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('giveBundle:Default:index.html.twig');
    }
    public function map2Action()

    {
        return $this->render('giveBundle:Default:map2.html.twig');
    }
}
