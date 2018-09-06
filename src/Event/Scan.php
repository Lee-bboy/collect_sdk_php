<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/8/9
 */

namespace DataCenter\LogSdk\Event;

/**
 * 浏览
 *
 * Class Scan
 * @package DataCenter\LogSdk\Event
 */
class Scan
{

    const EVENT = '$Scan';

    /**
     * @var null|string
     */
    protected $url = null;

    /**
     * @var null|string
     */
    protected $title = null;

    /**
     * @var null|string
     */
    protected $scanTime = null;

    /**
     * @var array
     */
    protected $attributes = [
        '$scan_time' => null,
        '$title' => null,
        '$url' => null,
    ];

    /**
     * @return array
     */
    public function getEventAttributes(): array
    {

        return $this->attributes;
    }

    /**
     * @param array $attributes
     * @return Scan
     */
    public function setEventAttributes(array $attributes): Scan
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @param null|string $title
     * @return Scan
     */
    public function setEventTitle(?string $title): Scan
    {
        $this->title = $title;
        $this->attributes['$title'] = $title;

        return $this;
    }

    /**
     * @param null|string $url
     * @return Scan
     */
    public function setEventUrl(?string $url): Scan
    {
        $this->url = $url;
        $this->attributes['$url'] = $url;

        return $this;
    }

    /**
     * @param null|string $scanTime
     * @return Scan
     */
    public function setEventScanTime(?string $scanTime): Scan
    {
        $this->scanTime = $scanTime;
        $this->attributes['$scan_time'] = $scanTime;

        return $this;
    }
}
