<?php


namespace app\models;


use yii\base\Model;

class Api extends Model
{
 public $merchant_site_code;
 public $return_url;
 public $receiver;
 public $transaction_info;
 public $order_code;
 public $price;
 public $currency;
 public $quantity;
 public $tax;
 public $discount;
 public $fee_cal;
 public $fee_shipping;
 public $order_description;
 public $buyer_info;
 public $lang;
 public $secure_code;
 public $cancel_url;
 public $notify_url;
 public $time_limit;
 public $affiliate_code;
}