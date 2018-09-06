<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/8/8
 */

require __DIR__ . '/vendor/autoload.php';


use DataCenter\LogSdk\LogService;


$service = new LogService('F00', true);


//$service->setUserId('abcd-212');


//$service->orderEvent()
//    ->setUserId("abcd-212")
//    ->setEventOrderId("208236132")
//    ->setEventChannel("swhdwo")
//  //  ->setEventAttributes(["app_id"=>"12121","good"=>"test"])
//    ->addEventAttribute("app_id","123132")
//    ->addEventAttribute("good","test")
//    ->build()
//    ->setLog();

$service->customEvent("SumbitEmailOrPhone")
    ->setUserId("abcd-456")
    ->setEventChannel("swee222")
    //  ->setEventAttributes(["app_id"=>"12121","good"=>"test"])
    ->addEventAttribute("app_id","123132")
    ->addEventAttribute("good","test")
    ->build()
    ->setLog();

$response = $service->post();

var_dump($response->isSuccessful());
