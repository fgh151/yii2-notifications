<?php

namespace fgh151\notifications\widgets\notifications;

use fgh151\notifications\models\Notification;

class Widget extends \yii\base\Widget
{

    public function run()
    {
        return $this->render('notify');
    }

}