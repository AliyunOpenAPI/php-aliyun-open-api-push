The Push SDK for Aliyun OpenAPI
==============================

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]


The Push SDK for Aliyun OpenAPI


## Install

Via Composer

``` bash
$ composer require lokielse/aliyun-open-api-push
```

## Usage

```php
/**
 * 访问信息
 */
$config = [
	'AccessKeyId'=>'<your access_key_id>',
	'AccessKeySecret'=>'<your access_key_secret>',
];

/**
 * 配置网关
 */
$endpoint = new Endpoint('cn-hangzhou', EndpointConfig::getRegionIds(), EndpointConfig::getProductDomains());
EndpointProvider::setEndpoints([ $endpoint ]);

/**
 * 授权资料
 */
$profile = DefaultProfile::getProfile('cn-hangzhou', $config['AccessKeyId'], $config['AccessKeySecret']);


/**
 * 请求对象
 */
$request = new \Aliyun\Push\Request\PushRequest();

/**
 * 推送目标
 */
$request->setAppKey($appKey);
$request->setTarget("all"); //推送目标: device:推送给设备; account:推送给指定帐号,tag:推送给自定义标签; all: 推送给全部
$request->setTargetValue("all"); //根据Target来设定，如Target=device, 则对应的值为 设备id1,设备id2. 多个值使用逗号分隔.(帐号与设备有一次最多100个的限制)
$request->setDeviceType(3); // 设备类型deviceType 取值范围为:0~3. iOS设备: 0; Android设备: 1; 全部: 3, 这是默认值.

/**
 * 推送配置
 */
$request->setType(1); // 0:表示消息(默认为0), 1:表示通知
$request->setTitle("Hello OpenAPI!"); // 消息的标题
$request->setBody("PushRequest body"); // 消息的内容
$request->setSummary("PushRequest summary"); // 通知的摘要

/**
 * 推送配置: iOS
 */
$request->setiOSBadge("5"); // iOS应用图标右上角角标
$request->setiOSMusic("default"); // iOS通知声音
$request->setiOSExtParameters("{\"k1\":\"ios\",\"k2\":\"v2\"}"); //自定义的kv结构,开发者扩展用 针对iOS设备
$request->setApnsEnv("DEV");
$request->setRemind("false"); // 当APP不在线时候，是否通过通知提醒

/**
 *  推送配置: Android
 */
$request->setAndroidOpenType("3"); // 点击通知后动作,1:打开应用 2: 打开应用Activity 3:打开 url
$request->setAndroidOpenUrl("http://www.baidu.com"); // Android收到推送后打开对应的url,仅仅当androidOpenType=3有效
$request->setAndroidExtParameters("{\"k1\":\"android\",\"k2\":\"v2\"}"); // 设定android类型设备通知的扩展属性

/**
 * 推送控制
 */
//$pushTime = new DateTime();
//$pushTime->add(new DateInterval('PT30S')); // 30秒之后的时间点, 也可以设置成你指定固定时间
//$request->setPushTime($pushTime->format('Y-m-d\TH:i:s\Z')); // 延后推送。可选，如果不设置表示立即推送
$request->setStoreOffline("false"); // 离线消息是否保存,若保存, 在推送时候，用户即使不在线，下一次上线则会收到
//$expireTime = new DateTime();
//$expireTime->add(new DateInterval('P1D')); // 12小时后消息失效, 不会再发送
//$request->setExpireTime($expireTime->format('Y-m-d\TH:i:s\Z'));
//$request->setBatchNumber("100010"); // 批次编号,用于活动效果统计. 设置成业务可以记录的字符串

$client   = new DefaultAcsClient($profile);
$response = $client->getAcsResponse($request);

var_dump($response);
```

[官方文档](https://help.aliyun.com/document_detail/30074.html)

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email lokielse@gmail.com instead of using the issue tracker.

## Credits

- [Lokielse][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/lokielse/aliyun-open-api-push.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/lokielse/aliyun-open-api-push/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/lokielse/aliyun-open-api-push.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/lokielse/aliyun-open-api-push.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/lokielse/aliyun-open-api-push.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/lokielse/aliyun-open-api-push
[link-travis]: https://travis-ci.org/lokielse/aliyun-open-api-push
[link-scrutinizer]: https://scrutinizer-ci.com/g/lokielse/aliyun-open-api-push/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/lokielse/aliyun-open-api-push
[link-downloads]: https://packagist.org/packages/lokielse/aliyun-open-api-push
[link-author]: https://github.com/lokielse
[link-contributors]: ../../contributors