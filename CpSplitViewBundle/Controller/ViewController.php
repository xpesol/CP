<?php

namespace FCS\CP\CpSplitViewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ViewController extends Controller
{
    public function viewAction()
    {
        return $this->render('FCSCPCpSplitViewBundle:View:split.html.twig');
    }
}
