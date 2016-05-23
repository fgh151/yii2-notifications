<?php
/**
 * Created by PhpStorm.
 * User: fgorsky
 * Date: 23.05.16
 * Time: 13:23
 */

namespace fgh151\notifications\widgets\notifications;


use yii\web\AssetBundle;

class WidgetAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
    public $depends = ['yii\bootstrap\BootstrapAsset'];
    public $js = [
        'notification-widget.js',
    ];
    public $css = [
        'notification-widget.css',
    ];


}