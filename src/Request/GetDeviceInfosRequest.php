<?php namespace Aliyun\Push\Request;

use Aliyun\Core\RpcAcsRequest;

class GetDeviceInfosRequest extends RpcAcsRequest
{

    private $devices;

    private $appKey;


    function __construct()
    {
        parent::__construct("Push", "2015-08-27", "GetDeviceInfos");
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


    public function getAppKey()
    {
        return $this->appKey;
    }


    public function setAppKey($appKey)
    {
        $this->appKey                    = $appKey;
        $this->queryParameters["AppKey"] = $appKey;
    }

}