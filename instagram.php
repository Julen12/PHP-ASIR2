
<?php
require 'vendor/autoload.php';
$instagram = new InstagramScraper\Instagram();
$nonPrivateAccountMedias = $instagram->getMedias('kevin');
echo $nonPrivateAccountMedias[0]->getLink();