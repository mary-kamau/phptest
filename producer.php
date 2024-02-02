<?php


require_once __DIR__ . '/vendor/autoload.php'; // Composer autoloader

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('task_queue', false, true, false, false);

$messageData = 'Your task data here'; 
$message = new AMQPMessage($messageData);

$channel->basic_publish($message, '', 'task_queue');

echo 'Task sent to the queue:', PHP_EOL;

$channel->close();
$connection->close();