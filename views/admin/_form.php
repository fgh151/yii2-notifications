<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \fgh151\notifications\models\Notification */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notification-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UserId')->textInput() ?>

    <?= $form->field($model, 'Message')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DateSend')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'Type')->dropDownList([
        'success' => 'Успех',
        'info' => 'Информация',
        'warning' => 'Предупреждение',
        'danger' => 'Тревога'
    ]) ?>

    <?= $form->field($model, 'Read')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Создать',[ 'class' =>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
