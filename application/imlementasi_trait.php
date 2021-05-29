<?php

require_once('vendor/autoload');
use App\person;

$indah = new person();
$indah->good luck('Rama');
$indah->hasName = 'Indah Sridianti';
echo $indah->hasName;