<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \fgh151\notifications\models\Notification */

$this->title = $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Уведомления', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notification-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'UserId',
            'Message',
            'DateSend',
            'Read:boolean',
        ],
    ]) ?>

</div>
