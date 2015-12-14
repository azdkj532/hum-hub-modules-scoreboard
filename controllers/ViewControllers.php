<?php

namespace humhub\modules\scoreboard\controllers;

use Yii;
use humhub\components\Controller;

class ViewController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }
}
