# WordToPdf

Symfony bundle to convert a word file to pdf.

Authors
-------

* Safwen Toukabri <safwen.toukabri@proxym-it.com>

Requirements
------------

* [LibreOffice](https://www.libreoffice.org/)


Installation
------------

 1. Add the bundle to composer.json:

```
// composer.json
{    
    "require":{
        ... ,
        "pxcore/wordtopdf": "dev-master"
    }
}
```

 2. Download the bundle using composer

```
$ composer require pxcore/wordtopdf "dev-master"
```
Composer will install the bundle to your project's vendor/pxcore/wordtopdf directory.

 3. Enable the bundle in the kernel:

```
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new pxCore\WordToPdfBundle\pxCoreWordToPdfBundle(),
        // ...
    );
}
```

 4. if libreoffice is not installed yet use this command

```
$ sudo apt-get install libreoffice
```

 5. Configure the libreoffice parameter (path to your libreoffice lib)

```
parameters:
    # ...
    libreoffice: /usr/bin/libreoffice	# Default value
```

Usage
-----

Convert WORD to PDF:

```
// Create a new instance of pxCore_wordToPdf_service 
$wordToPdfService = $this->get('pxCore_wordToPdf_service');

$webDir = __DIR__ . '/../../../../web';
// The word file path
$wordPath = $webDir . '/word/test.docx';
// The outDir in wich we will put the generated PDF
$outdir = $webDir . '/pdf';
// Generate the PDF file
$wordToPdfService->generatePdf($wordPath, $outdir);
```

Enjoy!
