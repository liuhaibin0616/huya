<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "liveroom".
 *
 * @property integer $liveroom_id
 * @property string $liveroom_name
 * @property string $liveroom_desc
 * @property string $liveroom_start
 * @property string $liveroom_stop
 * @property string $liveroom_man
 * @property integer $liveroom_num
 */
class Liveroom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'liveroom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['liveroom_start', 'liveroom_stop'], 'safe'],
            [['liveroom_num'], 'integer'],
            [['liveroom_name', 'liveroom_desc', 'liveroom_man'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'liveroom_id' => 'Liveroom ID',
            'liveroom_name' => 'Liveroom Name',
            'liveroom_desc' => 'Liveroom Desc',
            'liveroom_start' => 'Liveroom Start',
            'liveroom_stop' => 'Liveroom Stop',
            'liveroom_man' => 'Liveroom Man',
            'liveroom_num' => 'Liveroom Num',
        ];
    }
}
