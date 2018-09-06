<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/8/8
 */

namespace DataCenter\LogSdk;

/**
 * Class Gateway
 * @package DataCenter\LogSdk
 */
class Gateway
{

    const GATEWAY_HTTP = [
        'prod' => 'http://dev-sdklog.linghit.com/',
        'sandbox' => 'http://sdklog.linghit.com/'
    ];

    const GATEWAY_HTTPS = [
        'prod' => 'https://sdklog.linghit.com/',
        'sandbox' => 'https://dev-sdklog.linghit.com/'
    ];

    /**
     * @var string
     */
    protected $env = 'sandbox';

    /**
     * Gateway constructor.
     * @param $isDebug
     */
    public function __construct($isDebug)
    {
        $this->env = ('true' === $isDebug) ? 'sandbox' : 'prod';
    }

    public function host($isHTTPS = false)
    {
        if ($isHTTPS) {
            return $this->getHttps();
        }

        return $this->getHttp();
    }

    public function getHttp()
    {
        return static::GATEWAY_HTTP[$this->env];
    }

    public function getHttps()
    {
        return static::GATEWAY_HTTPS[$this->env];
    }
}
