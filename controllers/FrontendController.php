<?php

namespace fgh151\notifications\controllers;

use fgh151\notifications\models\Notification;

class FrontendController extends \yii\rest\Controller
{
    public function actionIndex()
    {
        return Notification::find()->where([
            'UserId' => \Yii::$app->user->identity->getId(),
            'Read' => false
        ])->all();
    }

    public function actionRead($id)
    {
        $notify = Notification::findOne($id);
        $notify->Read = true;
        return $notify->save();
    }

}
