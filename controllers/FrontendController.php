<?php

namespace fgh151\notifications\controllers;

class FrontendController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRead()
    {
        return $this->render('read');
    }

}
