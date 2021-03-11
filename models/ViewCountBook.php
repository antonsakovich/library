<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "view_count_book".
 *
 * @property string $name
 * @property int $amount
 */
class ViewCountBook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_count_book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['amount'], 'integer'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'amount' => 'Amount',
        ];
    }
}
