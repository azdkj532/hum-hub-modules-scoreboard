<?php
namespace humhub\modules\scoreboard;

use Yii;

class Events extends \yii\base\Object
{
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem(array(
            'label' => ("ScoreBoard.base", "ScoreBoard"),
            'url' => Url::to(['/scoreboard'),
            'icon' => '<i class="fa fa-bitcoin"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'scoreboard'),
            'sortOrder' => 1000,
        ));
    }
}
?>
