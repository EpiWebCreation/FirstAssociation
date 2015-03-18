<?php

namespace APP\AssocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('APPAssocBundle:Default:index.html.twig', array('name' => $name));
    }
}
