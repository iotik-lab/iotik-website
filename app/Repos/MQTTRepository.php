<?php

namespace App\Repos;

use PhpMqtt\Client\MqttClient;

class MQTTRepository
{
    public static function pub($topic, $message)
    {
        $mqtt = new MqttClient(config('app.mqtt.host'), config('app.mqtt.port'));
        $mqtt->connect();

        $mqtt->publish($topic, $message, 0);
        $mqtt->disconnect();
    }
}
