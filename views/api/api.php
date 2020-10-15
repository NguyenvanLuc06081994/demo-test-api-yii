<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
    <form method="get" action="<?= Yii::$app->urlManager->createAbsoluteUrl([Yii::$app->controller->id . '/submit']) ?>">
        <div class="form-group col-xs-12 col-sm-10 col-md-12">
            <div class="col-md-12">
                <input type="text" class="form-control" name="merchant_site_code" value="" placeholder="merchant_site_code"><br>
                <input type="text" class="form-control" name="return_url" value="" placeholder="return_url"><br>
                <input type="text" class="form-control" name="receiver" value="" placeholder="receiver"><br>
                <input type="text" class="form-control" name="transaction_info" value="" placeholder="transaction_info"><br>
                <input type="text" class="form-control" name="order_code" value="" placeholder="order_code"><br>
                <input type="text" class="form-control" name="price" value="" placeholder="price"><br>
                <input type="text" class="form-control" name="currency" value="" placeholder="currency"><br>
                <input type="text" class="form-control" name="quantity" value="" placeholder="quantity"><br>
                <input type="text" class="form-control" name="tax" value="" placeholder="tax"><br>
                <input type="text" class="form-control" name="discount" value="" placeholder="discount"><br>
                <input type="text" class="form-control" name="fee_cal" value="" placeholder="fee_cal"><br>
                <input type="text" class="form-control" name="fee_shipping" value="" placeholder="fee_shipping"><br>
                <input type="text" class="form-control" name="order_description" value="" placeholder="order_description"><br>
                <input type="text" class="form-control" name="buyer_info" value="" placeholder="buyer_info"><br>
                <input type="text" class="form-control" name="lang" value="" placeholder="lang"><br>
<!--                <input type="text" class="form-control" name="secure_code" value="" placeholder="secure_code"><br>-->
                <input type="text" class="form-control" name="cancel_url" value="" placeholder="cancel_url"><br>
                <input type="text" class="form-control" name="notify_url" value="" placeholder="notify_url"><br>
                <input type="text" class="form-control" name="time_limit" value="" placeholder="time_limit"><br>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
            <a class="btn btn-warning" href="<?= Yii::$app->urlManager->createAbsoluteUrl([Yii::$app->controller->id . '/cancel']) ?>">Cancel</a>
        </div>
    </form>