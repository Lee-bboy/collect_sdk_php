<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/8/9
 */

namespace DataCenter\LogSdk\Event;

/**
 * 注册事件
 *
 * Class Registry
 * @package DataCenter\LogSdk\Event
 */
class Registry extends AbstractEvent
{

    const EVENT = '$Regist';

    /**
     * @var string
     */
    protected $registryWay = null;


    /**
     * @var array
     */
    protected $attributes = [
        '$regist_way' => null
    ];

    /**
     * @return string
     */
    public function getEventRegistryWay()
    {
        return $this->registryWay;
    }

    /**
     * @param string $registryWay
     * @return $this
     */
    public function setEventRegistryWay(string $registryWay)
    {
        $this->registryWay = $registryWay;
        $this->attributes['$regist_way'] = $registryWay;

        return $this;
    }

    /**
     * @return array
     */
    public function getEventAttributes(): array
    {
        return $this->attributes;
    }
}
