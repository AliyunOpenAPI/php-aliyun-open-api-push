<?php namespace Aliyun\Push\Request;

use Aliyun\Core\RpcAcsRequest;

class PushByteMessageRequest extends RpcAcsRequest
{

    private $appId;

    private $sendType;

    private $accounts;

    private $deviceIds;

    private $pushContent;


    function __construct()
    {
        parent::__construct("Push", "2015-08-27", "PushByteMessage");
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


    public function getSendType()
    {
        return $this->sendType;
    }


    public function setSendType($sendType)
    {
        $this->sendType                    = $sendType;
        $this->queryParameters["SendType"] = $sendType;
    }


    public function getAccounts()
    {
        return $this->accounts;
    }


    public function setAccounts($accounts)
    {
        $this->accounts                    = $accounts;
        $this->queryParameters["Accounts"] = $accounts;
    }


    public function getDeviceIds()
    {
        return $this->deviceIds;
    }


    public function setDeviceIds($deviceIds)
    {
        $this->deviceIds                    = $deviceIds;
        $this->queryParameters["DeviceIds"] = $deviceIds;
    }


    public function getPushContent()
    {
        return $this->pushContent;
    }


    public function setPushContent($pushContent)
    {
        $this->pushContent                    = $pushContent;
        $this->queryParameters["PushContent"] = $pushContent;
    }

}