<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $display_name
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $description
 * @property string $image
 * @property integer $parent_id
 * @property integer $is_display
 */
class Category extends \yii\db\ActiveRecord
{

    public $path_name;

    const CHILD_NODE_PREFIX = '|--';

    const STATUS_ACTIVE = 10; // hien
    const STATUS_BLOCK = 1; //an
    const STATUS_DISPLAY = 1;

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

    public static function getTreeCategories()
    {
        return ArrayHelper::map(Category::getAllCategories(null, true), 'id', 'display_name');
    }

    public static function getAllChildCats($parent = null)
    {
        if ($parent === null) {
            return [];
        }

        static $listCat = [];

        $cats = self::findAll(['parent_id' => $parent]);

        if (!empty($cats)) {
            foreach ($cats as $cat) {
                $listCat[$cat->id] = ['disabled' => true];
                self::getAllChildCats($cat->id);
            }
        }

        return $listCat;
    }

    public static function getAllCategories($cat_id = null, $recursive = true)
    {
        $res = [];
        if ($cat_id != null) {
            $model = Category::findOne(['id' => $cat_id]);

            if ($model === null) {
                throw new NotFoundHttpException(404, "The requested Vod Category (#$cat_id) does not exist.");
            }

            //Thuc: them 'order'=>'order_number ASC' trong ham relations
            $children = $model->getBECategories();

            if ($children) {
                foreach ($children as $child) {
                    /** @var  $child Category */
                    $path = "";
                    $path .= Category::CHILD_NODE_PREFIX;
                    $child->display_name = $path . $child->display_name;
//                    $child->id = $path . $child->display_name;
                    $res[] = $child;
                    if ($recursive) {
                        $res = ArrayHelper::merge($res,
                            Category::getAllCategories($child->id));
                    }
                }
            }
        } else {
            $root_cats = Category::find()->andWhere(['parent_id' => null])
                ->orderBy(['id' => SORT_DESC])->all();
            if ($root_cats) {
                foreach ($root_cats as $cat) {
                    /* @var $cat Category */
                    $res[] = $cat;
                    if ($recursive) {
                        $res = ArrayHelper::merge($res,
                            Category::getAllCategories($cat->id));
                    }
                }
            }
        }

        return $res;
    }

    public function getBECategories()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'id'])
            ->orderBy(['id' => SORT_DESC])->all();

    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at', 'parent_id','is_display'], 'integer'],
            [['display_name'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 500],
            ['path_name', 'safe'],
            [['image'],
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
            'display_name' => 'Category Name',
            'status' => 'Status',
            'created_at' => 'Created Date',
            'updated_at' => 'Updated Date',
            'description' => 'Description',
            'parent_id' => 'Parent Name',
            'is_display' => 'Hiển thị trang chủ',
            'image'=>'Ảnh'
        ];
    }

    public function getImageLinkIcon()
    {
        return $this->image ? Url::to(Yii::getAlias('@web') . DIRECTORY_SEPARATOR . Yii::getAlias('@image_news') . DIRECTORY_SEPARATOR . $this->image, true) : '';

    }
}
