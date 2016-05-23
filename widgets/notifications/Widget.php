<?php

namespace fgh151\notifications\widgets\notifications;

use fgh151\notifications\models\Notification;

class Widget extends \yii\base\Widget
{
    private $notifications = null;
    
    public function init()
    {
        $this->notifications = Notification::find()->where(['UserId' => \Yii::$app->user->identity->getId()]);
    }
    
    public function run()
    {
        var_dump($this->notifications);
    }
}