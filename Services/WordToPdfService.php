<?php

namespace pxCore\WordToPdfBundle\Services;

/**
 * WordToPdfService
 *
 * @author Safwen Toukabri <safwen.toukabri@proxym-it.com>
 */
class WordToPdfService {

    private $container;
    private $libreoffice;

    public function __construct($container) {
        $this->container = $container;
        $this->libreoffice = $container->getParameter('libreoffice');
        if (!isset($this->libreoffice)) {
            throw new \Exception('The parameter "libreoffice" is required');
        }

        if (!file_exists($this->libreoffice)) {
            throw new \Exception($this->libreoffice . ': No such file or directory');
        }
    }

    public function generatePdf($wordPath, $outDir) {
        if (!isset($wordPath)) {
            throw new \Exception('"wordPath" is required');
        }

        if (!file_exists($wordPath)) {
            throw new \Exception($wordPath . ': No such file or directory');
        }

        if (!isset($outDir)) {
            throw new \Exception('"outdir" is required');
        }

        if (!file_exists($outDir)) {
            throw new \Exception($outDir . ': No such file or directory');
        }

        if (!is_readable($wordPath)) {
            throw new \Exception($wordPath . ': The file is not readable');
        }
        if (!is_writable($outDir)) {
            throw new \Exception($outDir . ': The file is not writable');
        }

        set_time_limit(0);

        // Génération de fichier (.pdf)
        exec('export HOME=' . $outDir . ' && ' . $this->libreoffice . ' --headless --convert-to pdf --outdir ' . $outDir . ' ' . $wordPath, $output, $err);
        if ($err) {
            throw new \Exception('Error: Check the libreoffice configuration');
        }
        
        $wordPathToArray = explode("/", $wordPath);
        $wordName = end($wordPathToArray);
        $pdfName = implode('.', explode(".", $wordName, -1)) . '.pdf';
        chmod($outDir . '/' . $pdfName, 0755);
    }

}
