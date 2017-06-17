<?php namespace UON;

/**
 * Class Statuses
 * @package UON
 */
class Statuses extends Client
{
    public function __construct($token)
    {
        parent::__construct();
        $this->token = $token;
    }

    /**
     * Get statuses list
     * @link https://api.u-on.ru/{key}/status.{_format}
     * @param null|array $parameters - List of parameters
     * @return array
     */
    public function get($parameters = null)
    {
        $endpoint = '/status';
        return $this->doRequest('get', $endpoint, $parameters);
    }

    /**
     * Get a list of statuses for leads
     * @link https://api.u-on.ru/{key}/status_lead.{_format}
     * @param null $parameters
     * @return array|false
     */
    public function lead($parameters = null)
    {
        $endpoint = '/status_lead';
        return $this->doRequest('get', $endpoint, $parameters);
    }

}