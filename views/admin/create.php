<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model \fgh151\notifications\models\Notification */

$this->title = 'Послать уведомление';
$this->params['breadcrumbs'][] = ['label' => 'Уведомления', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notification-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
