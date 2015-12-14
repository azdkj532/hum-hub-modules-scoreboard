<?php
namespace humhub\modules\scoreboard;

use Yii;

class Events extends \yii\base\Object
{
    public static function onTopMenuInit($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $user = Yii::$app->user->getIdentity();
        if ($user->isModuleEnabled('calendar')) {
            $event->sender->addItem(array(
            'label' => ("ScoreBoard.base", "ScoreBoard"),
                'url' => Url::to(['/scoreboard/global/index']),
                'icon' => '<i class="fa fa-bitcoin"></i>',
                'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'scoreboard' && Yii::$app->controller->id == 'global'),
                'sortOrder' => 1000,
            ));
        }
    }
}
?>
