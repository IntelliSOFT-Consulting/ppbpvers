<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Email</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-container {
            width: 100%;
            max-width: 780px;
            margin: auto;
            background: #ffffff;
            border: 10px solid #2F1F50;
            padding: 20px;
            box-sizing: border-box;
        }
        .header {
            background-color: #2F1F50;
            color: #ffffff;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 24px;
            padding: 10px;
            text-align: center;
        }
        .content {
            font-size: 12px;
            color: #333333;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            The Pharmacy and Poisons Board
        </div>
        <div class="content">
            <?= $content ?> 
        </div>
    </div>
</body>
</html>
