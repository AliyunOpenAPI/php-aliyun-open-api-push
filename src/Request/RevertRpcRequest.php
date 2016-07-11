<?php namespace Aliyun\Push\Request;

use Aliyun\Core\RpcAcsRequest;

class RevertRpcRequest extends RpcAcsRequest
{

    private $appId;

    private $deviceId;

    private $rpcContent;

    private $timeOut;


    function __construct()
    {
        parent::__construct("Push", "2015-08-27", "RevertRpc");
    }


    public function getAppId()
    {
        return $this->appId;
    }


    public function setAppId($appId)
    {
        $this->appId                    = $appId;
        $this->queryParameters["AppId"] = $appId;
    }


    public function getDeviceId()
    {
        return $this->deviceId;
    }


    public function setDeviceId($deviceId)
    {
        $this->deviceId                    = $deviceId;
        $this->queryParameters["DeviceId"] = $deviceId;
    }


    public function getRpcContent()
    {
        return $this->rpcContent;
    }


    public function setRpcContent($rpcContent)
    {
        $this->rpcContent                    = $rpcContent;
        $this->queryParameters["RpcContent"] = $rpcContent;
    }


    public function getTimeOut()
    {
        return $this->timeOut;
    }


    public function setTimeOut($timeOut)
    {
        $this->timeOut                    = $timeOut;
        $this->queryParameters["TimeOut"] = $timeOut;
    }

}