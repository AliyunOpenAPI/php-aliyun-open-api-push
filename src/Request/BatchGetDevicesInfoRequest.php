<?php namespace Aliyun\Push\Request;

use Aliyun\Core\RpcAcsRequest;

class BatchGetDevicesInfoRequest extends RpcAcsRequest
{

    private $devices;

    private $appId;


    function __construct()
    {
        parent::__construct("Push", "2015-08-27", "BatchGetDevicesInfo");
    }


    public function getDevices()
    {
        return $this->devices;
    }


    public function setDevices($devices)
    {
        $this->devices                    = $devices;
        $this->queryParameters["Devices"] = $devices;
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

}