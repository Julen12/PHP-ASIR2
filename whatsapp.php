<?php
require 'vendor/autoload.php';
$client = Client::getInstance([
    'url' => ' https://eu92.chat-api.com/instance93398/ ',
    'token' => 'dp6kk14irlsk4b4i'
 ]);

 $client->sendMessage([
    'phone' => '665703848',
    'body' => 'Hola!'
 ]);