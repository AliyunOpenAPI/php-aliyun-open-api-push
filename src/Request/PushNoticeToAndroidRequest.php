<?php namespace Aliyun\Push\Request;

use Aliyun\Core\RpcAcsRequest;

class PushNoticeToAndroidRequest extends RpcAcsRequest
{

    private $appKey;

    private $target;

    private $targetValue;

    private $summary;

    private $title;

    private $androidExtParameters;


    function __construct()
    {
        parent::__construct("Push", "2015-08-27", "PushNoticeToAndroid");
    }


    public function getAppKey()
    {
        return $this->appKey;
    }


    public function setAppKey($appKey)
    {
        $this->appKey                    = $appKey;
        $this->queryParameters["AppKey"] = $appKey;
    }


    public function getTarget()
    {
        return $this->target;
    }


    public function setTarget($target)
    {
        $this->target                    = $target;
        $this->queryParameters["Target"] = $target;
    }


    public function getTargetValue()
    {
        return $this->targetValue;
    }


    public function setTargetValue($targetValue)
    {
        $this->targetValue                    = $targetValue;
        $this->queryParameters["TargetValue"] = $targetValue;
    }


    public function getSummary()
    {
        return $this->summary;
    }


    public function setSummary($summary)
    {
        $this->summary                    = $summary;
        $this->queryParameters["Summary"] = $summary;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title                    = $title;
        $this->queryParameters["Title"] = $title;
    }


    public function getAndroidExtParameters()
    {
        return $this->androidExtParameters;
    }


    public function setAndroidExtParameters($androidExtParameters)
    {
        $this->androidExtParameters                    = $androidExtParameters;
        $this->queryParameters["AndroidExtParameters"] = $androidExtParameters;
    }

}