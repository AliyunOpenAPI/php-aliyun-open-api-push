<?php namespace Aliyun\Push\Request;

use Aliyun\Core\RpcAcsRequest;

class ListTagsRequest extends RpcAcsRequest
{

    private $appKey;


    function __construct()
    {
        parent::__construct("Push", "2015-08-27", "ListTags");
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