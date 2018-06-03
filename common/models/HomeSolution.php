<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\Url;

/**
 * This is the model class for table "home_solution".
 *
 * @property integer $id
 * @property string $image_display
 * @property string $description
 * @property string $content
 * @property string $title
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class HomeSolution extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 10; // hien
    const STATUS_BLOCK = 1;

    public function getListStatus()
    {
        $list1 = [
            self::STATUS_ACTIVE => 'Hiện',
            self::STATUS_BLOCK => 'Ẩn',
        ];

        return $list1;
    }

    public function getStatusName()
    {
        $lst = self::getListStatus();
        if (array_key_exists($this->status, $lst)) {
            return $lst[$this->status];
        }
        return $this->status;
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'home_solution';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_display', 'content'], 'string'],
            [['content','title'], 'required'],
            [['image_display'], 'required','on'=>'create'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_display' => 'Hình ảnh',
            'title' => 'Tiêu đề',
            'description' => 'Mô tả',
            'content' => 'Nội dung',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày thay đổi thông tin',
        ];
    }

    public function getImageLink()
    {
        return $this->image_display ? Url::to(Yii::getAlias('@web') . DIRECTORY_SEPARATOR . Yii::getAlias('@image_news') . DIRECTORY_SEPARATOR . $this->image_display, true) : '';
    }

    public function getImageLinkDetail($image)
    {
        return Url::to(Yii::getAlias('@web') . DIRECTORY_SEPARATOR . Yii::getAlias('@image_news') . DIRECTORY_SEPARATOR . $image, true);
    }
}
