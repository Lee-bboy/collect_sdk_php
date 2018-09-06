<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2017-06
 */

namespace DataCenter\LogSdk;

use GuzzleHttp\Psr7\Response as BaseResponse;

class Response extends BaseResponse
{

    /**
     * @return array
     */
    public function toArray()
    {
        return json_decode((string)$this->getBody(), true);
    }

    /**
     * @param BaseResponse $response
     * @return Response
     */
    public static function createFromResponse(BaseResponse $response)
    {
        return new static(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody(),
            $response->getProtocolVersion(),
            $response->getReasonPhrase()
        );
    }

    /**
     * @return bool
     */
    public function isSuccessful()
    {

        return $this->getStatusCode() >= 200 && $this->getStatusCode() < 300;
    }
}
