<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Gift".
 *
 * @property integer $gift_id
 * @property string $gift_name
 * @property string $gift_price
 * @property string $gift_desc
 * @property string $gift_img
 */
class Gift extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Gift';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gift_price'], 'number'],
            [['gift_name', 'gift_desc', 'gift_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gift_id' => 'Gift ID',
            'gift_name' => 'Gift Name',
            'gift_price' => 'Gift Price',
            'gift_desc' => 'Gift Desc',
            'gift_img' => 'Gift Img',
        ];
    }
}
