<?php

require_once __DIR__ . '/vendor/autoload.php'; 
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

function processTask($taskData)
{
    echo 'Processing task: ', $taskData, PHP_EOL;
}

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('task_queue', false, true, false, false);

echo 'Waiting for tasks. To exit press CTRL+C', PHP_EOL;

$callback = function (AMQPMessage $message) {
    $taskData = $message->body;
    processTask($taskData);
    echo 'Task processed', PHP_EOL;
};

$channel->basic_consume('task_queue', '', false, false, false, false, $callback);

while (count($channel->callbacks)) {
    $channel->wait();
}

$channel->close();
$connection->close();
