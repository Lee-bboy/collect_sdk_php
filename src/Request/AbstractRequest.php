<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/8/8
 */

namespace DataCenter\LogSdk\Request;
use DataCenter\LogSdk\LogService;

/**
 * 请求公有属性
 *
 * Class AbstractRequest
 * @package DataCenter\LogSdk\Request
 */
abstract class AbstractRequest
{
    const TYPE = '';

    const METHOD = '';

    protected $sdk = [];

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var string
     */
    protected $ip;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $province;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $appVersion;

    /**
     * @var string
     */
    protected $userAgent;

    /**
     * @var string
     */
    protected $sys;

    /**
     * @var string
     */
    protected $sysVersion;

    /**
     * @var string
     */
    protected $network;
    /**
     * @var LogService
     */
    private $service;

    /**
     * AbstractRequest constructor.
     * @param LogService $service
     * @param array|null $attributes
     */
    public function __construct(LogService $service, ?array $attributes)
    {
        $this->service = $service;
        !is_null($attributes) && $this->attributes = $attributes;
    }

    /**
     * @param string $network
     * @return $this
     */
    public function setMethodNetwork(string $network)
    {
        $this->network = $network;
        $this->attributes['$network'] = $network;

        return $this;
    }

    /**
     * @param string $sysVersion
     * @return $this
     */
    public function setMethodSysVersion(string $sysVersion)
    {
        $this->sysVersion = $sysVersion;
        $this->attributes['$sys_version'] = $sysVersion;

        return $this;
    }

    /**
     * @param string $sys
     * @return $this
     */
    public function setMethodSys(string $sys)
    {
        $this->sys = $sys;
        $this->attributes['$sys'] = $sys;

        return $this;
    }

    /**
     * @param string $userAgent
     * @return $this
     */
    public function setMethodUserAgent(string $userAgent)
    {
        $this->userAgent = $userAgent;
        $this->attributes['$user_agent'] = $userAgent;

        return $this;
    }

    /**
     * @param string $appVersion
     * @return $this
     */
    public function setMethodAppVersion(string $appVersion)
    {
        $this->appVersion = $appVersion;
        $this->attributes['$app_version'] = $appVersion;

        return $this;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setMethodCountry(string $country)
    {
        $this->country = $country;
        $this->attributes['$country'] = $country;

        return $this;
    }

    /**
     * @param string $province
     * @return $this
     */
    public function setMethodProvince(string $province)
    {
        $this->province = $province;
        $this->attributes['$province'] = $province;

        return $this;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setMethodCity(string $city)
    {
        $this->city = $city;
        $this->attributes['$city'] = $city;

        return $this;
    }

    /**
     * @param $ip
     * @return $this
     */
    public function setMethodIp($ip)
    {
        $this->ip = $ip;
        $this->attributes['$ip'] = $ip;
        
        return $this;
    }

    /**
     * 附加属性
     *
     * @param array $parameter
     * @return $this
     */
    public function addMethodAttributes(array $parameter)
    {
        $this->attributes = array_merge($this->attributes, $parameter);

        return $this;
    }

    /**
     * @return array
     */
    public function getMethodAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param string $name
     * @return null|string
     */
    public function __get($name): string
    {
        if (isset($this->$name)) {
            return $this->$name;
        }

        return null;
    }

    /**
     * @return array
     */
    public function getMethodSdk(): array
    {
        return $this->sdk;
    }

    public function buildAndReturnLogService()
    {
        $this->service->setLogType(static::TYPE);

        $this->service->setSDKMethod(static::METHOD);

        $this->service->setAttributes($this->getMethodAttributes());

        unset($this->attributes);

        return $this->service;
    }
}
