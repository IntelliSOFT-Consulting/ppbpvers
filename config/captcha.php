<?php
return [
    'Captcha' => [
        'table' => 'captchas', 
        'type' => 'math', // Ensure this is set to 'math'
        'theme' => 'default',
        'width' => 120,
        'height' => 40,
        'length' => 4,
        'session' => 'session_id',
        'ip' => 'ip',
        'created' => 'created',
        'used' => 'used',
        'math' => [
            'operators' => ['+', '-'], // Specify the operators you want to use
            'minNumber' => 1,
            'maxNumber' => 10,
        ],
    ]
];
 



?>