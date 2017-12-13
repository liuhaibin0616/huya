<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property string $cate_id
 * @property string $cate_name
 * @property integer $parent_id
 * @property integer $sort
 * @property string $logo
 */
class Category extends Model
{
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
            [['parent_id', 'sort'], 'integer'],
            [['cate_name'], 'string', 'max' => 30],
            [['logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cate_id' => 'Cate ID',
            'cate_name' => 'Cate Name',
            'parent_id' => 'Parent ID',
            'sort' => 'Sort',
            'logo' => 'Logo',
        ];
    }
}
