<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/8/8
 */

namespace DataCenter\LogSdk;

use DataCenter\LogSdk\Request\AbstractRequest;
use GuzzleHttp\Client;

abstract class AbstractLogService
{

    protected $sdk = [
        'sdk_id' => 'php',
        'sdk_version' => '1.0.0',
        'sdk_method' => null,
    ];

    /**
     * 业务ID
     * @var string
     */
    protected $appId;

    /**
     * 事件
     * @var string
     */
    protected $eventId;

    /**
     * @var string
     */
    protected $userId;

    /**
     * 日志时间
     * @var string
     */
    protected $logTime;

    /**
     * 日志类型
     * @var string
     */
    protected $logType;

    /**
     * @var array
     */
    protected $bodyParams = [];

    /**
     * 事件参数
     * @var array
     */
    protected $attributes = [];

    /**
     * 扩展参数
     * @var array
     */
    protected $extends = [];

    /**
     * @var string
     */
    protected $gateway;

    /**
     * @var bool
     */
    protected $isHttps = false;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var bool
     */
    protected $isDebug = true;

    /**
     * @var AbstractRequest
     */
    protected $request;

    /**
     * @var array
     */
    protected $log = [];

    /**
     * @var string
     */
    protected $body = null;

    /**
     * LogService constructor.
     * @param $appId
     * @param $isDebug
     * @param bool $isHTTPS
     */
    public function __construct($appId, $isDebug = false, $isHTTPS = true)
    {
        $this->client = new Client();
        $this->isHttps = $isHTTPS;
        $this->appId = $appId;
        $this->setGateway($isDebug, $isHTTPS);
    }

    /**
     * @return Response
     */
    public function post()
    {

//        var_dump($this->body);
//        var_dump($this->gateway);
//        exit;
        $response = $this->client->request(
            'POST',
            $this->gateway,
            [
                'body' => $this->body //stream_for($this->body)
            ]
        );



        return Response::createFromResponse($response);
    }

    /**
     * @param $isDebug
     * @param $isHTTPS
     */
    public function setGateway($isDebug, $isHTTPS)
    {
        $this->gateway = (new Gateway($isDebug))->host($isHTTPS);
    }

    /**
     * @return $this
     */
    public function setBody()
    {
        if (null === $this->body) {
            $this->body = json_encode($this->bodyParams);
        } else {
            $this->body = $this->body . PHP_EOL . json_encode($this->bodyParams);
        }

        return $this;
    }

    /**
     * @param string $appId
     * @return $this
     */
    public function setAppId(string $appId)
    {
        $this->appId = $appId;
        $this->bodyParams['app_id'] = $appId;

        return $this;
    }

    /**
     * @param string $userId
     * @return $this
     */
    public function setUserId(string $userId)
    {
        $this->userId = $userId;
        $this->bodyParams['user_id'] = $userId;

        return $this;
    }

    /**
     * @param string $logTime
     * @return $this
     */
    public function setLogTime(string $logTime)
    {
        $this->logTime = $logTime;
        $this->bodyParams['log_time'] = $logTime;

        return $this;
    }

    /**
     * @param string $sdk
     * @return $this
     */
    public function setSDKMethod(string $sdk)
    {
        $this->sdk['sdk_method'] = $sdk;
        $this->bodyParams['sdk'] = $this->sdk;

        return $this;
    }

    /**
     * @param string $logType
     * @return $this
     */
    public function setLogType(string $logType)
    {
        $this->logType = $logType;
        $this->bodyParams['log_type'] = $logType;

        return $this;
    }

    /**
     * 配置扩展属性
     *
     * @param array $extends
     * @return $this
     */
    public function setExtends(array $extends)
    {
        $this->extends = $extends;
        $this->bodyParams = array_merge($this->bodyParams, $extends);

        return $this;
    }

    /**
     * 添加扩展属性
     *
     * @param string $extend
     * @param string $parameter
     *
     * @return $this
     */
    public function addExtend(string $extend,string $parameter)
    {
        $this->bodyParams[$extend] = $parameter;

        return $this;
    }

    /**
     * 设置属性
     *
     * @param array $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = array_merge($this->attributes, $attributes);

        $this->bodyParams['attr'] = $this->attributes;

        return $this;
    }

    /**
     * @param string $attribute
     * @param $parameter
     * @return $this
     */
    public function addAttribute(string $attribute, $parameter)
    {
        $this->attributes[$attribute] = $parameter;
        $this->bodyParams['attr'][$attribute] = $parameter;

        return $this;
    }

    /**
     * @param string $eventId
     * @return AbstractLogService
     */
    public function setEventId(string $eventId)
    {
        $this->eventId = $eventId;
        $this->bodyParams['event_id'] = $eventId;

        return $this;
    }

}
