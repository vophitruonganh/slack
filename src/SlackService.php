<?php namespace Travozone\Slack;


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

}