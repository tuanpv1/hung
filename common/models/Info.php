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
            [['title', 'image_display', 'description', 'phone', 'address', 'facebook', 'email'], 'string', 'max' => 255],
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
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ',
            'facebook' => 'Facebook',
        ];
    }

    public function getImageLink()
    {
        return $this->image_display ? Url::to(Yii::getAlias('@web') . DIRECTORY_SEPARATOR . Yii::getAlias('@image_news') . DIRECTORY_SEPARATOR . $this->image_display, true) : '';
        // return $this->images ? Url::to('@web/' . Yii::getAlias('@cat_image') . DIRECTORY_SEPARATOR . $this->images, true) : '';
    }
}
