<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/8/9
 */

namespace DataCenter\LogSdk\Event;

/**
 * 下单详情
 *
 * Class OrderDetail
 * @package DataCenter\LogSdk\Event
 */
class OrderDetail extends AbstractEvent
{

    const EVENT = '$Order';

    /**
     * @var null|string
     */
    protected $orderId = null;

    /**
     * @var null|string
     */
    protected $orderPrice = null;

    /**
     * @var null|string
     */
    protected $goodsName = null;

    /**
     * @var null|string
     */
    protected $goodsAmount = null;

    /**
     * @var array
     */
    protected $attributes = [
        '$order_id' => null,
        '$order_price' => null,
        '$goods_name' => null,
        '$goods_amount' => null,
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
     * @return OrderDetail
     */
    public function setEventGoodsName(?string $goodsName): OrderDetail
    {
        $this->goodsName = $goodsName;
        $this->attributes['$goods_name'] = $goodsName;

        return $this;
    }

    /**
     * @param null|string $orderPrice
     * @return OrderDetail
     */
    public function setEventOrderPrice(?string $orderPrice): OrderDetail
    {
        $this->orderPrice = $orderPrice;
        $this->attributes['$order_price'] = $orderPrice;

        return $this;
    }

    /**
     * @param null|string $orderId
     * @return OrderDetail
     */
    public function setEventOrderId(?string $orderId): OrderDetail
    {
        $this->orderId = $orderId;
        $this->attributes['$order_id'] = $orderId;

        return $this;
    }

    /**
     * @param null|string $goodsAmount
     * @return OrderDetail
     */
    public function setEventGoodsAmount(?string $goodsAmount): OrderDetail
    {
        $this->goodsAmount = $goodsAmount;
        $this->attributes['$goods_amount'] = $goodsAmount;

        return $this;
    }
}
