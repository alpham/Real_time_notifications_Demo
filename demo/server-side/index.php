<?php 


require( __DIR__ . '/ElephantIO/Client.php');
use ElephantIO\Client as ElephantIOClient;

$elephant = new ElephantIOClient('http://localhost:8000', 'socket.io', 1, false, true, true);

$elephant->init();
$elephant->send(
    ElephantIOClient::TYPE_EVENT,
    null,
    null,
    json_encode(array('name' => 'action', 'args' => "{text: 'notification from page2.php' }"))
);
$elephant->close();
?>

<a href='page2.php'>page2</a>
<a href='index.php'>index</a>
