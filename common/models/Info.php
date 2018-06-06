<?php

namespace common\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "info_table".
 *
 * @property int $id
 * @property string $title
 * @property string $image_display
 * @property string $description
 * @property string $content
 * @property string $phone
 * @property string $address
 * @property string $facebook
 * @property string $email
 * @property string $skype1
 * @property string $skype2
 * @property string $youtube
 * @property string $google
 * @property string $phone_support
 */
class Info extends \yii\db\ActiveRecord
{
    const ID = 1;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [
                ['title', 'image_display', 'description', 'phone', 'address',
                    'facebook', 'email', 'phone_support', 'skype1', 'skype2', 'youtube', 'google'],
                'string', 'max' => 255
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Tên',
            'image_display' => 'Hình ảnh',
            'description' => 'Mô tả ngắn',
            'content' => 'Nội dung',
            'phone' => 'Hotline',
            'address' => 'Địa chỉ',
            'facebook' => 'Facebook',
            'phone_support' => 'Số điện thoại hỗ trợ kĩ thuật',
            'youtube' => 'Youtube link',
            'google' => 'Google+ link',
            'skype1' => 'Id skype hỗ trợ kĩ thuật 1',
            'skype2' => 'Id skype hỗ trợ kĩ thuật 2',
        ];
    }

    public function getImageLink()
    {
        return $this->image_display ? Url::to(Yii::getAlias('@web') . DIRECTORY_SEPARATOR . Yii::getAlias('@image_news') . DIRECTORY_SEPARATOR . $this->image_display, true) : '';
        // return $this->images ? Url::to('@web/' . Yii::getAlias('@cat_image') . DIRECTORY_SEPARATOR . $this->images, true) : '';
    }
}
