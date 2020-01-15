<?php

require 'vendor/autoload.php';

use DmitryIvanov\DarkSkyApi\DarkSkyApi;
$forecast = (new DarkSkyApi('9051c42ec479eebc435aa4c91a5eb33c'))
    ->location(46.482, 30.723)
    ->units('si')
    ->language('es')
    ->forecast();
echo $forecast->currently()->summary();