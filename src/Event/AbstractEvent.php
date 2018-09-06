<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/8/9
 */

namespace DataCenter\LogSdk\Event;

use DataCenter\LogSdk\LogService;

/**
 * Class AbstractEvent
 * @package DataCenter\LogSdk\Event
 */
abstract class AbstractEvent
{

    //const EVENT = '';

    const TYPE = '';

    const METHOD = '';

    protected $enventId = '';

    /**
     * @var string
     */
    protected $userId;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var LogService
     */
    private $logService;

//    public function __construct(LogService $logService,?array $attributes)
//    {
//        !is_null($attributes) && $this->setEventAttributes($attributes);
//        $this->logService = $logService;
//    }

    public function __construct(LogService $logService,string $enventId)
    {
        $this->enventId = $enventId;
//        !is_null($attributes) && $this->setEventAttributes($attributes);
        $this->logService = $logService;
    }


    /**
     * @param array $attributes
     * @return $this
     */
    public function setEventAttributes(array $attributes)
    {
        foreach ($attributes as $key => $attribute) {
            $this->$key = $attribute;
            $this->attributes[$key] = $attribute;
        }

        return $this;
    }

    /**
     * @return array
     */
    public function getEventAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param string $attribute
     * @param string $parameter
     * @return $this
     */
    public function addEventAttribute(string $attribute, string $parameter)
    {
        $this->attributes[$attribute] = $parameter;

        return $this;
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        if (isset($this->$name)) {
            $this->$name = $value;
        }
    }

    /**
     * @param string $userId
     * @return $this
     */
    public function setUserId(string $userId)
    {
        $this->userId = $userId;
//        $this->bodyParams['user_id'] = $userId;
//
//        return $this;
        return $this;
    }

    /**
     * @return LogService
     */
    public function build()
    {

        $this->logService->setEventId($this->enventId);

        $this->logService->setUserId($this->userId);

        $this->logService->setLogTime(time());

        $this->logService->setLogType(static::TYPE);

        $this->logService->setSDKMethod(static::METHOD);

        $this->logService->setAttributes($this->getEventAttributes());

        unset($this->attributes);

        return $this->logService;
    }
}
