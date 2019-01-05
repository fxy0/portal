<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "notes".
 *
 * @property int $id
 * @property string $ad
 * @property string $aciklama
 * @property string $tarih
 */
class Notes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ad', 'aciklama', 'tarih'], 'required'],
            [['id'], 'integer'],
            [['aciklama'], 'string'],
            [['tarih'], 'safe'],
            [['ad'], 'string', 'max' => 50],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ad' => 'Ad',
            'aciklama' => 'Aciklama',
            'tarih' => 'Tarih',
        ];
    }
}
