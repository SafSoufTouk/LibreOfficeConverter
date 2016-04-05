<?php

namespace pxCore\LibreOfficeConverterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('pxCoreLibreOfficeConverterBundle:Default:index.html.twig');
    }
}
