<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/8/9
 */

namespace DataCenter\LogSdk\Event;

/**
 * 下单
 *
 * Class Order
 * @package DataCenter\LogSdk\Event
 */
class Order extends AbstractEvent
{

    protected $enventId = '$Order';

    const TYPE = 'user_event';

    const METHOD =  'track';

    /**
     * @var null|string
     */
    protected $orderId = '';

    /**
     * @var null|string
     */
    protected $orderPrice = '';

    /**
     * @var null|string
     */
    protected $goodsName = '';

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
        '$order_price' => '',
        '$goods_name' => '',

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
     * @return Order
     */
    public function setEventGoodsName(?string $goodsName): Order
    {
        $this->goodsName = $goodsName;
        $this->attributes['$goods_name'] = $goodsName;

        return $this;
    }

    /**
     * @param null|string $orderPrice
     * @return Order
     */
    public function setEventOrderPrice(?string $orderPrice): Order
    {
        $this->orderPrice = $orderPrice;
        $this->attributes['$order_price'] = $orderPrice;

        return $this;
    }

    /**
     * @param null|string $orderId
     * @return Order
     */
    public function setEventOrderId(?string $orderId): Order
    {
        $this->orderId = $orderId;
        $this->attributes['$order_id'] = $orderId;

        return $this;
    }

    /**
     * @param null|string $province
     * @return Order
     */
    public function setEventProvince(?string $province): Order
    {
        $this->province = $province;
        $this->attributes['$province'] = $province;

        return $this;
    }

    /**
     * @param null|string $network
     * @return Order
     */
    public function setEventNetwork(?string $network): Order
    {
        $this->network = $network;
        $this->attributes['$network'] = $network;

        return $this;
    }

    /**
     * @param null|string $channel
     * @return Order
     */
    public function setEventChannel(?string $channel): Order
    {
        $this->channel = $channel;
        $this->attributes['$channel'] = $channel;

        return $this;
    }

    /**
     * @param null|string $sys
     * @return Order
     */
    public function setEventSys(?string $sys): Order
    {
        $this->sys = $sys;
        $this->attributes['$sys'] = $sys;

        return $this;
    }

    /**
     * @param null|string $city
     * @return Order
     */
    public function setEventCity(?string $city): Order
    {
        $this->city = $city;
        $this->attributes['$city'] = $city;

        return $this;
    }

    /**
     * @param null|string $ip
     * @return Order
     */
    public function setEventIp(?string $ip): Order
    {
        $this->ip = $ip;
        $this->attributes['$ip'] = $ip;

        return $this;
    }

    /**
     * @param null|string $useragent
     * @return Order
     */
    public function setEventUseragent(?string $useragent): Order
    {
        $this->useragent = $useragent;
        $this->attributes['$useragent'] = $useragent;

        return $this;
    }

    /**
     * @param null|string $sysVersion
     * @return Order
     */
    public function setEventSysVersion(?string $sysVersion): Order
    {
        $this->sysVersion = $sysVersion;
        $this->attributes['$sys_version'] = $sysVersion;

        return $this;
    }

    /**
     * @param null|string $equipmentBrand
     * @return Order
     */
    public function setEventEquipmentBrand(?string $equipmentBrand): Order
    {
        $this->equipmentBrand = $equipmentBrand;
        $this->attributes['$equipment_brandrand'] = $equipmentBrand;

        return $this;
    }


    /**
     * @param null|string $appVersion
     * @return Order
     */
    public function setEventAppVersion(?string $appVersion): Order
    {
        $this->appVersion = $appVersion;
        $this->attributes['$app_version'] = $appVersion;

        return $this;
    }

    /**
     * @param null|string $country
     * @return Order
     */
    public function setEventCountry(?string $country): Order
    {
        $this->country = $country;
        $this->attributes['$country'] = $country;

        return $this;
    }
}
