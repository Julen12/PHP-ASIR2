
<?php
require 'vendor/autoload.php';


$accounts = $instagram->searchAccountsByUsername('raiym');

$account = $accounts[0];
// Following fields are available in this request
echo "Account info:\n";
echo "Username: {$account->getUsername()}";
echo "Full name: {$account->getFullName()}";
echo "Profile pic url: {$account->getProfilePicUrl()}";

