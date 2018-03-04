<?php
/**
 * Created by IntelliJ IDEA.
 * User: Админ
 * Date: 02.03.2018
 * Time: 14:09
 */
require_once 'model/db.php';

$db = new db();
$data = $db->query('SELECT * FROM blog')->all();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/angular.js"></script>
</head>
<body data-ng-app="myApp" >
<ul>
    <? foreach ($data as $key=>$value): ?>
        <li ng-controller="iterMyCtrl">
            <?=$value["text"]; ?>
            <input type="button" id="comm<?=$value['id']?>" class="comm<?=$value['id']?> buttoncomm" value="Show Comments">
            <input type="button" value="Send" ng-click="myIterCtrlMethod(<?=$value['id']?>)" >
            <ul>
                <li ng-repeat="m in iterMsg">{{m.text_comment}}</li>
            </ul>
    <? endforeach; ?>
</ul>
<p>{{today | date:'dd:MM:yyyy-HH-mm-ss'}}</p>
<script src="js/main.js"></script>
</body>
</html>
