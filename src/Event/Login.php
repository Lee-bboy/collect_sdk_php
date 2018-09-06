<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/8/9
 */

namespace DataCenter\LogSdk\Event;

/**
 * 登录事件
 *
 * Class Login
 * @package DataCenter\LogSdk\Event
 */
class Login extends AbstractEvent
{

    const EVENT = '$Login';

    /**
     * @var null|string
     */
    protected $loginWay = null;

    /**
     * @var array
     */
    protected $attributes = [
        '$login_way' => null
    ];

    /**
     * @return array
     */
    public function getEventAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @return null|string
     */
    public function getEventLoginWay(): ?string
    {
        return $this->loginWay;
    }

    /**
     * @param null|string $loginWay
     * @return $this
     */
    public function setEventLoginWay(?string $loginWay)
    {
        $this->loginWay = $loginWay;
        $this->attributes['$login_way'] = $loginWay;

        return $this;
    }
}
