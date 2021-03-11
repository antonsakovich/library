<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "view_tittle_book".
 *
 * @property string $tittle
 * @property string $name
 */
class ViewTittleBook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_tittle_book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tittle', 'name'], 'required'],
            [['tittle'], 'string', 'max' => 100],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tittle' => 'Tittle',
            'name' => 'Name',
        ];
    }
}
