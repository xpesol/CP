<?php

namespace FCS\CP\EditCpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FCSCPEditCpBundle:Default:index.html.twig');
    }
}
