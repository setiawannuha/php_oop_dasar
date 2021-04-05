<?php
include_once __DIR__.'/elektronik.php';
include_once __DIR__.'/gadget.php';

use Elektronik\Handphone;
use Gadget\Handphone as HandphoneGadget;

$elektronik = new Handphone;
$gadget = new HandphoneGadget;

echo $elektronik->getName();
echo "<hr/>";
echo $gadget->getName();