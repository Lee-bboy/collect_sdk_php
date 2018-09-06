<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/8/8
 */

namespace DataCenter\LogSdk;

use DataCenter\LogSdk\Event\Order;
use DataCenter\LogSdk\Request\Info;
use DataCenter\LogSdk\Request\InfoLink;
use DataCenter\LogSdk\Request\InfoUpdate;
use DataCenter\LogSdk\Request\Monitor;
use DataCenter\LogSdk\Request\Track;
use DataCenter\LogSdk\Event\Pay;
use DataCenter\LogSdk\Event\Custom;

/**
 * Class LogService
 * @package DataCenter\LogSdk
 */
class LogService extends AbstractLogService
{
    private $event;

    /**
     * @var string
     */
    protected $body = null;

    /**
     * @return $this
     */
    public function setLog(): LogService
    {
        $this->setAppId($this->appId);
       // var_dump($this->bodyParams);
        if (null === $this->body) {
            $this->body = json_encode($this->bodyParams);
        } else {
            $this->body = $this->body . PHP_EOL . json_encode($this->bodyParams);
        }

        $this->bodyParams = [];
        $this->attributes = [];

        return $this;
    }

    /**
     * @param array $attributes
     * @return Track
     */
    public function trackMethod(array $attributes = [])
    {
        return new Track($this, $attributes);
    }

    /**
     * @param array $attributes
     * @return Monitor
     */
    public function monitorMethod(array $attributes = [])
    {
        return new Monitor($this, $attributes);
    }

    /**
     * @param array $attributes
     * @return InfoUpdate
     */
    public function infoUpdateMethod(array $attributes = [])
    {
        return new InfoUpdate($this, $attributes);
    }

    /**
     * @param array $attributes
     * @return InfoLink
     */
    public function infoLinkMethod(array $attributes = [])
    {
        return new InfoLink($this, $attributes);
    }

    /**
     * @param array $attributes
     * @return Info
     */
    public function infoMethod(array $attributes = [])
    {
        return new Info($this, $attributes);
    }

    /**
    /**
     * @param array|null $attributes
     * @return Event\AbstractEvent|Order
     */
    public function orderEvent()
    {
        $this->event = new Order($this,'$Order');

        return $this->event;
    }

    /**
    /**
     * @param array|null $attributes
     * @return Event\AbstractEvent|Pay
     */
    public function payEvent()
    {
        $this->event = new Pay($this,'$Pay');

        return $this->event;
    }

    /**
    /**
     * @param array|null $attributes
     * @return Event\AbstractEvent|Custom
     */
    public function customEvent(string $envent_id)
    {

        $this->event = new Custom($this,$envent_id);

        return $this->event;
    }


}
