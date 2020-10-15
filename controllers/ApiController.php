<?php


namespace app\controllers;


use app\models\Api;
use app\models\NganLuong;
use Yii;
use yii\base\Model;

class ApiController extends SiteController
{
    public function actionSubmit()
    {
        $nl = new NganLuong();
        $url = $nl->buildCheckoutUrlExpand($_REQUEST['return_url'], $_REQUEST['receiver'], $_REQUEST['transaction_info'], $_REQUEST['order_code'], $_REQUEST['price'], $_REQUEST['currency'], $_REQUEST['quantity'], $_REQUEST['tax'], $_REQUEST['discount'], $_REQUEST['fee_cal'], $_REQUEST['fee_shipping'], $_REQUEST['order_description'], $_REQUEST['buyer_info'], $affiliate_code = '', $_REQUEST['cancel_url']);
//        $api_url = "https://sandbox.nganluong.vn:8088/nl35/checkout.php?";
//        $params = [
//            'notify_url' => $_REQUEST['notify_url'],
//            'return_url' => $_REQUEST['return_url'],
//            'receiver' => $_REQUEST['receiver'],
//            'transaction_info' => $_REQUEST['transaction_info'],
//            'order_code' => $_REQUEST['order_code'],
//            'price' => $_REQUEST['price'],
//            'currency' => $_REQUEST['currency'],
//            'quantity' => $_REQUEST['quantity'],
//            'tax' => $_REQUEST['tax'],
//            'discount' => $_REQUEST['discount'],
//            'fee_cal' => $_REQUEST['fee_cal'],
//            'fee_shipping' => $_REQUEST['fee_shipping'],
//            'order_description' => $_REQUEST['order_description'],
//            'buyer_info' => $_REQUEST['buyer_info'],
//            'lang' => $_REQUEST['lang'],
//            'secure_code' => $_REQUEST['secure_code'],
//            'cancel_url' => $_REQUEST['cancel_url'],
//            'merchant_site_code' => $_REQUEST['merchant_site_code'],
//            'time_limit' => $_REQUEST['time_limit'],
//            'affiliate_code' => ''
//        ];
//        $post_field = '';
//        foreach ($params as $key => $value) {
//            if ($post_field != '') $post_field .= '&';
//            $post_field .= $key . "=" . $value;
//        }
//        $url = $api_url . $post_field;
//        var_dump($url);
//        die();
        return $this->redirect($url);
    }

    public function actionView()
    {
        return $this->render('api');
    }

    public function actionResult()
    {
//        var_dump($_GET);
//        die();
        return $this->render('result', ['result' => $_GET]);

    }

}