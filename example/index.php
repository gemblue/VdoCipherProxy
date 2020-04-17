<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../src/VdoCipherInterface.php';
require __DIR__ . '/../src/VdoCipher.php';

use VdoCipher\VdoCipher;

$VdoCipher = new VdoCipher;
echo $VdoCipher->getOtpPlaybackInfo();
exit;