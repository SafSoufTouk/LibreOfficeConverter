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

### Download the bundle using composer

```
$ composer require px-core/libre-office-converter "dev-master"
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
        new pxCore\LibreOfficeConverterBundle\pxCoreLibreOfficeConverterBundle()
        // ...
    );
}
```

### If libreoffice is not installed yet use this command

```
$ sudo apt-get install libreoffice
```

### Configure the libreoffice parameter (path to your libreoffice lib)

```
parameters:
    # ...
    libreoffice: /usr/bin/libreoffice	# Default value
```
On Unix or Linux variants the LibreOffice executable will usually be found in /usr/lib/libreoffice/program/soffice <br /> 
(link: /usr/bin/libreoffice)

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

LibreOffice works with the following file extensions
-----

### LibreOffice default file extension associations

##### The most common file formats used with the specific file extensions
.ott file extension is used for OpenOffice.org text document template<br />
.sdc file extension is used for OpenOffice.org spreadsheet file<br />
.sdd file extension is used for OpenOffice.org Impress presentation file<br />

##### Other file extensions or file formats developed for use with LibreOffice
.doc# .fods .fodt .odb .odi .oos .oot .otf .otg .oth .oti .otp .ots .oxt .sdp .sds .sdv .sfs .smf .sms .std .stw .sxg .sxm .vor

### Common file extensions used by LibreOffice
.doc .odf .odg .ods .odt .ott .pdf .pub .rtf .sda .sdc .sdd .sdw .sxc .sxw

### Other file extensions associated with LibreOffice
.bau .dump .fodg .fodp .odm .odp .otc .psw .sdb .sgl .smd .stc .sti .svm .sxd .uot

Enjoy!
