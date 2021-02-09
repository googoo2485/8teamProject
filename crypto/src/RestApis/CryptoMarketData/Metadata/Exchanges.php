<?php

namespace RestApis\CryptoMarketData\Metadata;

use Common\Request;
use Common\Response;

class Exchanges extends Request {

    protected $endpoint = '/exchanges';


    /**
     * @param int $skip
     * @param int $limit
     * @return \stdClass Response
     */

    public function get($skip = 0, $limit = 50)
    {
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => ['skip' => $skip, 'limit' => $limit]
            ])
        ))->get();
    }
}