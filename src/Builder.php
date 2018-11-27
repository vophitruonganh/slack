<?php namespace Travozone\Slack;


use stdClass;
use Ixudra\Curl\Facades\Curl as Curl;
class Builder {

    /**
     * notify slack with message
     *
     * @param [type] $meesage
     * @param [type] $channel
     * @return void
     */
    public function message($meesage, $channel)
    {
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
