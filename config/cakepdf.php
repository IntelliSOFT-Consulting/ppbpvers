<?php
return [
    'CakePdf' => [
        'engine' => [
            'className' => 'CakePdf.WkHtmlToPdf',
            'binary' => '/usr/bin/wkhtmltopdf', // Path to wkhtmltopdf
            'options' => [
                'print-media-type' => true,
                'outline' => true,
                'dpi' => 96, 
                'no-stop-slow-scripts' => true,
                'enable-local-file-access' => true,
            ],
        ],
        'margin' => [
            'bottom' => 15,
            'left' => 15,
            'right' => 15,
            'top' => 15
        ],
        'orientation' => 'portrait',
        'download' => true
    ]
];

?>