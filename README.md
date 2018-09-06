
ser 安装
composer.js 加入
```text
{
  "repositories": [
    {
        "type": "git",
        "url": "https://github.com/Lee-bboy/collect_sdk_php.git"
    }
  ],
  "require": {
    "data-center/log-sdk":"v1.0.*"
  }
}
```




### 2、使用方式
使用composer require/update data-center/log-sdk
```例子
require __DIR__ . '/vendor/autoload.php';
use DataCenter\LogSdk\LogService;
$service = new LogService('A00', false);      //第一个参数是对应的业务线id，第二个参数是对应请求的环境变量，false是正式环境，true是测试环境

$service->orderEvent()
    ->setUserId("abcd-212")
    ->setEventOrderId("2082361322239553")
    ->setEventChannel("swhdwos")
    ->setEventAttributes(["coupon_id"=>"12121","coupon_name"=>"test"])
    ->build()
    ->setLog();

$response = $service->post();

```
$response 对象查询返回的状态和结果


### 3、api
##### 3.1、orderEvent()、payEvent()
预定义事件 sdk已经设置好对应的event_id,可追加自定义属性和值，可以使用setEventAttributes的array方式或者addEventAttribute的key-value方式,代码参考：
```js
// 下单
$service->orderEvent()
    ->setEventAttributes(["coupon_id"=>"12121","coupon_name"=>"test"])
// 或者
$service->orderEvent()
        ->addEventAttribute("coupon_id","123132")
   		->addEventAttribute("coupon_name","test")
```

##### 3.2、customEvent(String)
自定义事件，必须传入自定义的event_id参数，类型为String。代码参考：
```js
$service->customEvent("SumbitEmailOrPhone")
    ->setUserId("abcd-456")
    ->setEventChannel("swee222")
    ->setEventAttributes(["coupon_id"=>"12121","coupon_name"=>"test"])
    ->build()
    ->setLog();
```
