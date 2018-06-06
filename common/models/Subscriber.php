<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subscriber".
 *
 * @property int $id
 * @property int $status
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $content Bang luu tru thong tin khach hang lien he
 */
class Subscriber extends \yii\db\ActiveRecord
{
    const STATUS_CANCEL = 7;
    const STATUS_BOOKED = 8;
    const STATUS_COME = 9;
    const STUTUS_CONFIRM = 10;

    public static function listStatus()
    {
        $lst = [
            self::STATUS_BOOKED => Yii::t('app','Vừa đăng kí'),
            self::STATUS_CANCEL => Yii::t('app','Đã hủy'),
            self::STATUS_COME => Yii::t('app','Đã hoàn thành'),
            self::STUTUS_CONFIRM => Yii::t('app','Đã xác nhận'),
        ];
        return $lst;
    }

    public function getStatusName()
    {
        $lst = self::listStatus();
        if (array_key_exists($this->status, $lst)) {
            return $lst[$this->status];
        }
        return $this->status;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subscriber';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'phone', 'email', 'content', 'status'], 'required'],
            [['id', 'status'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 500],
            [['phone'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 200],
            [['content'], 'string', 'max' => 1000],
            [['id'], 'unique'],
            ['email', 'email']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => Yii::t('app','Họ và tên'),
            'address' => Yii::t('app','Địa chỉ'),
            'phone' => Yii::t('app','Điện thoại'),
            'email' => Yii::t('app','Email'),
            'content' => Yii::t('app','Nội dung'),
            'status' => Yii::t('app','Trạng thái'),
        ];
    }
}
