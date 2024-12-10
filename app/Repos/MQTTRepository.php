<?php

namespace App\Repos;

use App\Models\Incubator;
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

    public static function candling(Incubator $incubator, $revert = false)
    {
        $camera = $incubator->devices()->where('type', 'camera')->first();
        $led = $incubator->devices()->where('type', 'candling')->first();
        $temp = $incubator->devices()->where('type', 'temperature')->first();

        $mqtt = new MqttClient(config('app.mqtt.host'), config('app.mqtt.port'));
        $mqtt->connect();

        if (!$revert) {
            $mqtt->publish("temperature/{$temp->code}", "LIGHT:OFF", 1);
            $mqtt->publish("led/{$led->code}", json_encode([1, 2, 3]), 1);
            $mqtt->publish("camera/{$camera->code}", "SEND", 1);
        } else {
            $mqtt->publish("temperature/{$temp->code}", "LIGHT:ON", 1);
            $mqtt->publish("led/{$led->code}", json_encode([]), 1);
        }

        $mqtt->disconnect();
    }
}
