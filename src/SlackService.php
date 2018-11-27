<?php namespace Travozone\Slack;

use Ixudra\Curl\Facades\Curl as Curl;
class SlackService {

    /**
     * @param $url string   The URL to which the request is to be sent
     * @return \Ixudra\Curl\Builder
     */
    public function to($url)
    {
        $builder = new Builder();

        return $builder->to($url);
    }

    public function message($message, $channel = 'debug')
    {
        if (is_array($message)) {
            $message = json_encode($message);
        }
        $params = array(
            'text' => $message,
            "channel" => $channel,
        );
        return Curl::to(config('slack.hook'))
            ->withData($params)
            ->asJson(true)
            ->post();
    }


}
