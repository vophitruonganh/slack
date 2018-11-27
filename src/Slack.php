<?php

namespace Travozone\Slack;
use Ixudra\Curl\Facades\Curl;
class Slack {
    protected $webhook;
    protected $channel;

    static function send(){
        if (is_array($message)) {
            $message = json_encode($message);
        }
        $params = array(
            'text' => $message,
            "channel" => $channel,
        );

        Curl::to(config('slack.hook'))
            ->withData($params)
            ->asJson(true)
            ->post();
    }
}