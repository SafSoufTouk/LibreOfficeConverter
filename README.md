# pxCore/LibreOfficeConverter

Symfony bundle to converts files from one format, such as '.docx' or '.xlsx' to another, such as '.pdf' or '.csv'.

Authors
-------

* Safwen Toukabri <safwen.toukabri@proxym-it.com>

Requirements
------------

* [LibreOffice](https://www.libreoffice.org/)


Installation
------------

### Add the bundle to composer.json:

```
// composer.json
{    
    "require":{
        ... ,
        "pxcore/libreofficeconverter": "dev-master"
    }
}
```

### Download the bundle using composer

```
$ composer require pxcore/libreofficeconverter "dev-master"
```
Composer will install the bundle to your project's vendor/pxcore/libreofficeconverter directory.

### Enable the bundle in the kernel:

```
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new pxCore\LibreOfficeConverterBundle\pxCoreLibreOfficeConverterBundle(),
        // ...
    );
}
```

### if libreoffice is not installed yet use this command

```
$ sudo apt-get install libreoffice
```

### Configure the libreoffice parameter (path to your libreoffice lib)

```
parameters:
    # ...
    libreoffice: /usr/bin/libreoffice	# Default value
```
On Unix or Linux variants the LibreOffice executable will usually be found in /usr/lib/libreoffice/program/soffice (link: /usr/bin/libreoffice)

Usage
-----

Exemple1: Convert WORD to PDF:

```
// Create a new instance of pxCore_libreOffice_converter_service 
$wordToPdfService = $this->get('pxCore_libreOffice_converter_service');

$webDir = __DIR__ . '/../../../../web';
// The word file path
$wordPath = $webDir . '/word/test.docx';
// The outDir in wich we will put the generated PDF
$outDir = $webDir . '/pdf';
$toFormat = 'pdf';
// Generate the PDF file
$wordToPdfService->generatePdf($wordPath, $outDir, $toFormat);
```

Enjoy!
