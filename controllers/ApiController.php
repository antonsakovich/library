<?php
namespace app\controllers;
use yii\base\Model;
use app\models\Authors;
use app\models\Books;
use yii\rest\ActiveController;
use app\models\ViewTittleBook;
use app\models\ViewCountBook;
use yii\rest\Controller;
class ApiController extends ActiveController

// 1) http://library/api              POST - ( Добавить запись)
//2) http://library/api/ id          PUT - (Обновить запись по ID)
//3) http://library/api/ id          DELЕTE - ( Удалить  запись по ID)
//4) http://library/api/ id          GET  - (Получить запись по ID)

{
    public $modelClass = Books::class;


    public function behaviors()
   {
//        $behaviors = parent::behaviors();
//        $behaviors['corsFilter' ] = [
//          'class' => \yii\filters\Cors::className(),
//       ];

      $behaviors['contentNegotiator'] = [
           'class' => \yii\filters\ContentNegotiator::className(),
           'formats' => [
               'application/json' => \yii\web\Response::FORMAT_JSON, // Формат ответа (Можно XML)
           ],
       ];



       return $behaviors;
    }


// Дает контроллеру возможность осуществлять перечисленые операции
   protected function verbs() { $verbs = parent::verbs(); $verbs['api'] = ['GET', 'POST', 'HEAD','PUT']; return $verbs; }


}