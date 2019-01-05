<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "not".
 *
 * @property int $id
 * @property string $name
 * @property string $not
 * @property string $date
 */
class Not extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'not';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'not', 'date'], 'required'],
            [['id'], 'integer'],
            [['not'], 'string'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'not' => 'Not',
            'date' => 'Date',
        ];
    }
}
