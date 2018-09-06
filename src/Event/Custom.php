<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/8/9
 */

namespace DataCenter\LogSdk\Event;

/**
 * 自定义
 *
 * Class Custom
 * @package DataCenter\LogSdk\Event
 */
class Custom extends AbstractEvent
{

  //  const EVENT = 'Custom';

    protected $enventId = 'Custom';

    const TYPE = 'user_event';

    const METHOD =  'track';

    /**
     * @var null|string
     */
    protected $province = '';

    /**
     * @var null|string
     */
    protected $network = '';

    /**
     * @var null|string
     */
    protected $channel = '';

    /**
     * @var null|string
     */
    protected $sys = '';

    /**
     * @var null|string
     */
    protected $city = '';

    /**
     * @var null|string
     */
    protected $ip = '';

    /**
     * @var null|string
     */
    protected $useragent = '';

    /**
     * @var null|string
     */
    protected $sysVersion = '';

    /**
     * @var null|string
     */
    protected $equipmentBrand = '';

    /**
     * @var null|string
     */
    protected $appVersion = '';

    /**
     * @var null|string
     */
    protected $country = '';


    /**
     * @var array
     */
    protected $attributes = [
        '$province' => '',
        '$network' => '',
        '$channel' => '',
        '$sys' => '',
        '$city' => '',
        '$ip' => '',
        '$useragent' => '',
        '$sys_version' => '',
        '$equipment_brand' => '',
        '$app_version' => '',
        '$country' => '',
    ];

    /**
     * @return array
     */
    public function getEventAttributes(): array
    {
        return $this->attributes;
    }


    /**
     * @param null|string $province
     * @return Custom
     */
    public function setEventProvince(?string $province): Custom
    {
        $this->province = $province;
        $this->attributes['$province'] = $province;
        return $this;
    }

    /**
     * @param null|string $network
     * @return Custom
     */
    public function setEventNetwork(?string $network): Custom
    {
        $this->network = $network;
        $this->attributes['$network'] = $network;

        return $this;
    }

    /**
     * @param null|string $channel
     * @return Custom
     */
    public function setEventChannel(?string $channel): Custom
    {
        $this->channel = $channel;
        $this->attributes['$channel'] = $channel;

        return $this;
    }

    /**
     * @param null|string $sys
     * @return Custom
     */
    public function setEventSys(?string $sys): Custom
    {
        $this->sys = $sys;
        $this->attributes['$sys'] = $sys;

        return $this;
    }

    /**
     * @param null|string $city
     * @return Custom
     */
    public function setEventCity(?string $city): Custom
    {
        $this->city = $city;
        $this->attributes['$city'] = $city;

        return $this;
    }

    /**
     * @param null|string $ip
     * @return Custom
     */
    public function setEventIp(?string $ip): Custom
    {
        $this->ip = $ip;
        $this->attributes['$ip'] = $ip;

        return $this;
    }

    /**
     * @param null|string $useragent
     * @return Custom
     */
    public function setEventUseragent(?string $useragent): Custom
    {
        $this->useragent = $useragent;
        $this->attributes['$useragent'] = $useragent;

        return $this;
    }

    /**
     * @param null|string $sysVersion
     * @return Custom
     */
    public function setEventSysVersion(?string $sysVersion): Custom
    {
        $this->sysVersion = $sysVersion;
        $this->attributes['$sys_version'] = $sysVersion;

        return $this;
    }

    /**
     * @param null|string $equipmentBrand
     * @return Custom
     */
    public function setEventEquipmentBrand(?string $equipmentBrand): Custom
    {
        $this->equipmentBrand = $equipmentBrand;
        $this->attributes['$equipment_brandrand'] = $equipmentBrand;

        return $this;
    }


    /**
     * @param null|string $appVersion
     * @return Custom
     */
    public function setEventAppVersion(?string $appVersion): Custom
    {
        $this->appVersion = $appVersion;
        $this->attributes['$app_version'] = $appVersion;

        return $this;
    }

    /**
     * @param null|string $country
     * @return Custom
     */
    public function setEventCountry(?string $country): Custom
    {
        $this->country = $country;
        $this->attributes['$country'] = $country;

        return $this;
    }


}
