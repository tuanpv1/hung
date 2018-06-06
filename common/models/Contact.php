<?php

namespace common\models;
use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $map
 * @property string $image
 */
class Contact extends \yii\db\ActiveRecord
{
    const ID = 1;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'map', 'image'], 'string'],
            [['content', 'map', 'image', 'title'], 'required'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'map' => 'Bản đồ',
        ];
    }

    public function getImageLink()
    {
        return $this->image ? Url::to(Yii::getAlias('@web') . DIRECTORY_SEPARATOR . Yii::getAlias('@image_contact') . DIRECTORY_SEPARATOR . $this->image, true) : '';
    }
}
