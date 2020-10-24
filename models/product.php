<?php
namespace app\models;
use yii\db\ActiveRecord;

Class Category extends ActiveRecord{

    public static function tableName(){
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::ClassName(), ['id', => 'category_id']);
    }

}
?>