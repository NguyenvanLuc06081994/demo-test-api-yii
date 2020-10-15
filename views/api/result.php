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
<table class="table table-dark table-hover text-center">
    <thead>
    <tr>
        <th scope="col">Transaction_info</th>
        <th scope="col">order_code</th>
        <th scope="col">price</th>
        <th scope="col">payment_id</th>
        <th scope="col">payment_type</th>
        <th scope="col">error_text</th>
        <th scope="col">secure_code</th>
        <th scope="col">token_nl</th>
    </tr>
    </thead>
    <tbody>
    <tr>
<!--        --><?php //var_dump($result); ?>
        <th scope="row"><?php /** @var TYPE_NAME $result */
            echo $result['transaction_info'] ?></th>
        <td><?php echo $result['order_code']?></td>
        <td><?php echo $result['price']?></td>
        <td><?php echo $result['payment_id']?></td>
        <td><?php echo $result['payment_type']?></td>
        <td><?php echo $result['error_text']?></td>
        <td><?php echo $result['secure_code']?></td>
        <td><?php echo $result['token_nl']?></td>
    </tr>
    </tbody>
</table>
</body>
</html>
<?php ?>
