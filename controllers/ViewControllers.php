<?php

namespace humhub\modules\scoreboard\controllers;

use Yii;
use yii\web\HttpException;
use humhub\components\Controller;
use humhub\modules\scoreboard\models\Score;

class ViewController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }
}
