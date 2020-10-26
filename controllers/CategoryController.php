<?php

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends AppController {

    public function ActionIndex(){
        $hits = Product::find()->where(['hit' =>'1'])->limit(6)->all();
        debug($hits);
        return $this->render('index');
    }

}