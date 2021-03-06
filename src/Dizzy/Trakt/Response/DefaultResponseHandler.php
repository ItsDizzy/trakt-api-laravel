<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 14-7-2016
 * Time: 11:37
 */

namespace Dizzy\Trakt\Response;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Message\ResponseInterface;

/**
 * Class DefaultResponseHandler
 * @package Dizzy\Trakt\Response
 */
class DefaultResponseHandler extends AbstractResponseHandler
{
    /**
     * The default handler for requests.
     * @param ClientInterface $client
     * @param ResponseInterface $response
     * @return \Illuminate\Support\Collection
     */
    public function handle(ClientInterface $client, ResponseInterface $response)
    {
        $json = $this->getJson($response);
        return (is_array($json)) ? collect($json) : collect([$json]);
    }
}