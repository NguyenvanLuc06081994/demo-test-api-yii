<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php Yii::$app->session->setFlash('success', 'Thanh toan thanh cong');  ?>
<h1 class="text-center" style="color: blue">Resut</h1>
<form class="form-group" method="post" action="<?= Yii::$app->urlManager->createAbsoluteUrl([Yii::$app->controller->id . '/checkout']) ?>">
    <div class="form-group col-xs-12 col-sm-10 col-md-12">
        <input type="text" class="form-control" name="merchant_site_code" value="" placeholder="merchant_site_code"><br>
        <input type="text" class="form-control" name="order_code" value="<?php /** @var TYPE_NAME $result */
        echo $result['order_code']?>" placeholder="merchant_site_code"><br>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Check Order</button>
            <a class="btn btn-warning" href="<?= Yii::$app->urlManager->createAbsoluteUrl([Yii::$app->controller->id . '/cancel']) ?>">Cancel</a>
        </div>
    </div>

<!--    <tr>-->
<!--       --><?php ////var_dump($result); ?>
<!--        <th scope="row">--><?php ///** @var TYPE_NAME $result */
//            echo $result['transaction_info'] ?><!--</th>-->
<!--        <input ></input>-->
<!--        <td>--><?php //echo $result['price']?><!--</td>-->
<!--        <td>--><?php //echo $result['payment_id']?><!--</td>-->
<!--        <td>--><?php //echo $result['payment_type']?><!--</td>-->
<!--        <td>--><?php //echo $result['error_text']?><!--</td>-->
<!--        <td>--><?php //echo $result['secure_code']?><!--</td>-->
<!--        <td>--><?php //echo $result['token_nl']?><!--</td>-->
<!--    </tr>-->

</form>
</body>
</html>
<?php ?>
