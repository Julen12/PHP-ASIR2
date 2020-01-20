<?php
if(!isset($_GET['text']) or !isset($_GET['phone'])){ die('Not enough data');}

$apiURL = ' https://eu92.chat-api.com/instance93398/';
$token = 'dp6kk14irlsk4b4i';

$message = $_GET['text'];
$phone = $_GET['phone'];

$data = json_encode(
    array(
        'chatId'=>$phone.'@c.us',
        'body'=>$message
    )
);
$url = $apiURL.'message?token='.$token;
$options = stream_context_create(
    array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $data
        )
    )
);
$response = file_get_contents($url,false,$options);
echo $response; exit;
?>

<html>


<form action="whatsapp.php" method="POST">
    <input type="text" name="message">
    <br>
    Password:
    <br>

    <input type="text" name="phone">
    <br> <br>
    <input type="submit" value="Submit">

</form>
</html> 

