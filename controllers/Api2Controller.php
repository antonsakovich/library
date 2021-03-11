<?php
namespace app\controllers;
use yii\base\Model;
use app\models\Authors;
use app\models\Books;
use yii\rest\ActiveController;
use app\models\ViewTittleBook;
use app\models\ViewCountBook;
use yii\rest\Controller;
use app\controllers\ApiController;
class Api2Controller extends ApiController


    // API Контроллер для отобраджения Вьюшки из БД
//  5)  http://library/api2/       GET  - (Cписок книг с именем автора)




{
    public $modelClass = ViewTittleBook::class;


    public function behaviors()
   {
//        $behaviors = parent::behaviors();
//        $behaviors['corsFilter' ] = [
//          'class' => \yii\filters\Cors::className(),
//       ];

      $behaviors['contentNegotiator'] = [
           'class' => \yii\filters\ContentNegotiator::className(),
           'formats' => [
               'application/json' => \yii\web\Response::FORMAT_JSON,  // Формат ответа (Можно XML)
           ],
       ];



       return $behaviors;
    }


// Дает контроллеру возможность осуществлять перечисленые операции
  // protected function verbs() { $verbs = parent::verbs(); $verbs['api2'] = ['GET', 'HEAD']; return $verbs; }


}