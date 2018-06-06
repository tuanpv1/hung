<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\Url;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $image_display
 * @property string $image_slide
 * @property string $title
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $description
 * @property string $icon
 * @property string $content
 * @property integer $is_slide
 * @property integer $category_id
 * @property integer $posted_id
 * @property integer $is_hot
 * @property integer $type
 * @property integer $is_file
 * @property string $file
 *
 */
class News extends \yii\db\ActiveRecord
{

    const STATUS_ACTIVE = 10; // hien
    const STATUS_BLOCK = 1;

    const IS_SLIDE = 1;

    const NOT_SLIDE = 0;

    const IS_HOT = 1;

    const TYPE_NEWS = 1; // Danh cho tin tức nếu có
    const TYPE_PRODUCT = 2; // Dành cho sản phẩm
    const TYPE_ABOUT = 3; // Dành cho giới thiêu
    const TYPE_PARTNER = 4; // Dành cho phần tìm kiếm đối tác

    public function getListStatus()
    {
        $list1 = [
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_BLOCK => 'InActive',
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
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['status', 'created_at', 'updated_at', 'is_slide', 'category_id', 'posted_id','is_hot','type','is_file'], 'integer'],
            [['title','file'], 'string', 'max' => 255],
            [['title'], 'required'],
            [['image_display'], 'required','on'=>'create'],
            [['description'], 'string', 'max' => 500],
            [['image_display', 'image_slide','icon'],
                'file',
                'tooBig' => Yii::t('app', '{attribute} vượt quá dung lượng cho phép. Vui lòng thử lại'),
                'wrongExtension' => Yii::t('app', '{attribute} không đúng định dạng'),
                'uploadRequired' => Yii::t('app', '{attribute} không được để trống'),
                'extensions' => 'png, jpg, jpeg, gif',
                'maxSize' => 1024 * 1024 * 10
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
            'image_display' => 'Image Display',
            'image_slide' => 'Image Slide',
            'title' => 'Title',
            'status' => 'Status',
            'created_at' => 'Created Date',
            'updated_at' => 'Updated Date',
            'description' => 'Description',
            'content' => 'Content',
            'is_slide' => 'Have image Slide',
            'category_id' => 'Category Name',
            'posted_id' => 'Posted Name',
            'is_hot' => Yii::t('app','Hiển thị trang chủ'),
            'icon'=>Yii::t('app','Icon'),
            'is_file'=>Yii::t('app','Is file'),
            'file'=>Yii::t('app','File'),
        ];
    }

    public function getImageLink()
    {
        return $this->image_display ? Url::to(Yii::getAlias('@web') . DIRECTORY_SEPARATOR . Yii::getAlias('@image_news') . DIRECTORY_SEPARATOR . $this->image_display, true) : '';
        // return $this->images ? Url::to('@web/' . Yii::getAlias('@cat_image') . DIRECTORY_SEPARATOR . $this->images, true) : '';
    }

    public function getImageSlide(){
        return $this->image_slide ? Url::to(Yii::getAlias('@web') . DIRECTORY_SEPARATOR . Yii::getAlias('@image_news') . DIRECTORY_SEPARATOR . $this->image_slide, true) : '';

    }

    public function getNameCategory()
    {
        $category = Category::findOne($this->category_id);
        if($category){
            return $category->display_name;
        }else{
            return 'Đang cập nhật';
        }
    }

    public function getAuthorPoster()
    {
        $author = User::findOne($this->posted_id);
        if($author){
            return $author->fullname?$author->fullname:$author->username;
        }else{
            return 'Đang cập nhật';
        }
    }

    public function getImageLinkIcon()
    {
        return $this->icon ? Url::to(Yii::getAlias('@web') . DIRECTORY_SEPARATOR . Yii::getAlias('@image_news') . DIRECTORY_SEPARATOR . $this->icon, true) : '';

    }

    public function getFile()
    {
        return $this->icon ? Url::to(Yii::getAlias('@web') . DIRECTORY_SEPARATOR . Yii::getAlias('@file') . DIRECTORY_SEPARATOR . $this->file, true) : '';
    }
}
