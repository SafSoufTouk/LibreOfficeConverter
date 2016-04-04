<?php

namespace pxCore\WordToPdfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        $wordToPdfService = $this->get('pxCore_wordToPdf_service');

        $webDir = __DIR__ . '/../../../../web';
        $wordPath = $webDir . '/word/test.docx';
        $outdir = $webDir . '/pdf';
        $wordToPdfService->generatePdf($wordPath, $outdir);

        return $this->render('pxCoreWordToPdfBundle:Default:index.html.twig');
    }

}
