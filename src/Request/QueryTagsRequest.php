<?php namespace Aliyun\Push\Request;

use Aliyun\Core\RpcAcsRequest;

class QueryTagsRequest extends RpcAcsRequest
{

    private $appKey;

    private $clientKey;

    private $keyType;


    function __construct()
    {
        parent::__construct("Push", "2015-08-27", "QueryTags");
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


    public function getClientKey()
    {
        return $this->clientKey;
    }


    public function setClientKey($clientKey)
    {
        $this->clientKey                    = $clientKey;
        $this->queryParameters["ClientKey"] = $clientKey;
    }


    public function getKeyType()
    {
        return $this->keyType;
    }


    public function setKeyType($keyType)
    {
        $this->keyType                    = $keyType;
        $this->queryParameters["KeyType"] = $keyType;
    }

}