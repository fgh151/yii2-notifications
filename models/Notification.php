<?php

namespace fgh151\notifications\models;

use Yii;

/**
 * This is the model class for table "Notification".
 *
 * @property integer $Id
 * @property integer $UserId
 * @property string $Message
 * @property string $DateSend
 * @property boolean $Read
 * @property string $Type
 */
class Notification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Notification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserId', 'Message', 'DateSend'], 'required'],
            [['UserId'], 'integer'],
            [['DateSend'], 'safe'],
            [['Read'], 'boolean'],
            [['Message', 'Type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'UserId' => 'Получатель',
            'Message' => 'Сообщение',
            'DateSend' => 'Дата отправки',
            'Read' => 'Прочитано?',
            'Type' => 'Тип'
        ];
    }

    /**
     * @param string $type
     * @param string $message
     * @param array|integer $user
     */
    public static function send($type, $message, $user)
    {
        if(is_array($user)) {
            foreach ($user as $item) {
                self::send($type, $message, $item);
            }
        } else {
            $notify = new Notification();
            $notify->Message = $message;
            $notify->UserId = $user;
            $notify->Type = $type;
            $notify->save();
        }
    }
}
