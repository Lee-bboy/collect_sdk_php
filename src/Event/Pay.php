<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/8/9
 */

namespace DataCenter\LogSdk\Event;

/**
 * 支付
 *
 * Class Pay
 * @package DataCenter\LogSdk\Event
 */
class Pay extends AbstractEvent
{

    protected $enventId = '$Pay';

    const TYPE = 'user_event';

    const METHOD = 'track';

    /**
     * @var null|string
     */
    protected $orderId = '';

    /**
     * @var null|string
     */
    protected $payPrice = '';

    /**
     * @var null|string
     */
    protected $goodsName = '';

    /**
     * @var null|string
     */
    protected $payWay = '';

    /**
     * @var null|string
     */
    protected $payResult = '';

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
        '$order_id' => '',
        '$pay_price' => '',
        '$goods_name' => '',
        '$pay_way' => '',
        '$pay_result' => '',

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
     * @param null|string $goodsName
     * @return Pay
     */
    public function setEventGoodsName(?string $goodsName): Pay
    {
        $this->goodsName = $goodsName;
        $this->attributes['$goods_name'] = $goodsName;

        return $this;
    }

    /**
     * @param null|string $orderPrice
     * @return Pay
     */
    public function setEventPayPrice(?string $payPrice): Pay
    {
        $this->payPrice = $payPrice;
        $this->attributes['$pay_price'] = $payPrice;

        return $this;
    }

    /**
     * @param null|string $orderId
     * @return Pay
     */
    public function setEventOrderId(?string $orderId): Pay
    {
        $this->orderId = $orderId;
        $this->attributes['$order_id'] = $orderId;

        return $this;
    }

    /**
     * @param null|string $payWay
     * @return Pay
     */
    public function setEventPayWay(?string $payWay): Pay
    {
        $this->payWay = $payWay;
        $this->attributes['$pay_way'] = $payWay;

        return $this;
    }

    /**
     * @param null|string $pay_result
     * @return Pay
     */
    public function setEventPayResult(?string $pay_result): Pay
    {
        $this->payResult = $pay_result;
        $this->attributes['$pay_result'] = $pay_result;

        return $this;
    }

    /**
     * @param null|string $province
     * @return Pay
     */
    public function setEventProvince(?string $province): Pay
    {
        $this->province = $province;
        $this->attributes['$province'] = $province;

        return $this;
    }

    /**
     * @param null|string $network
     * @return Pay
     */
    public function setEventNetwork(?string $network): Pay
    {
        $this->network = $network;
        $this->attributes['$network'] = $network;

        return $this;
    }

    /**
     * @param null|string $channel
     * @return Pay
     */
    public function setEventChannel(?string $channel): Pay
    {
        $this->channel = $channel;
        $this->attributes['$channel'] = $channel;

        return $this;
    }

    /**
     * @param null|string $sys
     * @return Pay
     */
    public function setEventSys(?string $sys): Pay
    {
        $this->sys = $sys;
        $this->attributes['$sys'] = $sys;

        return $this;
    }

    /**
     * @param null|string $city
     * @return Pay
     */
    public function setEventCity(?string $city): Pay
    {
        $this->city = $city;
        $this->attributes['$city'] = $city;

        return $this;
    }

    /**
     * @param null|string $ip
     * @return Pay
     */
    public function setEventIp(?string $ip): Pay
    {
        $this->ip = $ip;
        $this->attributes['$ip'] = $ip;

        return $this;
    }

    /**
     * @param null|string $useragent
     * @return Pay
     */
    public function setEventUseragent(?string $useragent): Pay
    {
        $this->useragent = $useragent;
        $this->attributes['$useragent'] = $useragent;

        return $this;
    }

    /**
     * @param null|string $sysVersion
     * @return Pay
     */
    public function setEventSysVersion(?string $sysVersion): Pay
    {
        $this->sysVersion = $sysVersion;
        $this->attributes['$sys_version'] = $sysVersion;

        return $this;
    }

    /**
     * @param null|string $equipmentBrand
     * @return Pay
     */
    public function setEventEquipmentBrand(?string $equipmentBrand): Pay
    {
        $this->equipmentBrand = $equipmentBrand;
        $this->attributes['$equipment_brandrand'] = $equipmentBrand;

        return $this;
    }


    /**
     * @param null|string $appVersion
     * @return Pay
     */
    public function setEventAppVersion(?string $appVersion): Pay
    {
        $this->appVersion = $appVersion;
        $this->attributes['$app_version'] = $appVersion;

        return $this;
    }

    /**
     * @param null|string $country
     * @return Pay
     */
    public function setEventCountry(?string $country): Pay
    {
        $this->country = $country;
        $this->attributes['$country'] = $country;

        return $this;
    }
}
