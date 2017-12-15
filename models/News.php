<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property integer $categoryId
 * @property string $name
 * @property string $description
 * @property string $fulltext
 */
class News extends \yii\db\ActiveRecord
{
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
            [['categoryId'], 'integer'],
            [['name'], 'required'],
            [['description', 'fulltext'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categoryId' => 'Category ID',
            'name' => 'Name',
            'description' => 'Description',
            'fulltext' => 'Fulltext',
        ];
    }
}
