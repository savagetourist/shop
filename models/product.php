<?php
namespace app\models;
use yii\db\ActiveRecord;

Class Product extends ActiveRecord{

    public static function tableName(){
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}