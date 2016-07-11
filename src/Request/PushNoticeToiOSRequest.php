<?php namespace Aliyun\Push\Request;

use Aliyun\Core\RpcAcsRequest;

class PushNoticeToiOSRequest extends RpcAcsRequest
{

    private $appKey;

    private $target;

    private $targetValue;

    private $ext;

    private $env;

    private $summary;

    private $iOSExtParameters;


    function __construct()
    {
        parent::__construct("Push", "2015-08-27", "PushNoticeToiOS");
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


    public function getExt()
    {
        return $this->ext;
    }


    public function setExt($ext)
    {
        $this->ext                    = $ext;
        $this->queryParameters["Ext"] = $ext;
    }


    public function getEnv()
    {
        return $this->env;
    }


    public function setEnv($env)
    {
        $this->env                    = $env;
        $this->queryParameters["Env"] = $env;
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


    public function getiOSExtParameters()
    {
        return $this->iOSExtParameters;
    }


    public function setiOSExtParameters($iOSExtParameters)
    {
        $this->iOSExtParameters                    = $iOSExtParameters;
        $this->queryParameters["iOSExtParameters"] = $iOSExtParameters;
    }

}