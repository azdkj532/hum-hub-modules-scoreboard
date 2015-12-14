<?php
namespace humhub\modules\scoreboard;

use humhub\widgets\TopMenu;
use humhub\modules\user\models\User;

return [
    'id' => 'scoreboard',
    'class' => 'humhub\modules\scoreboard\Module',
    'namespace' => 'humhub\modules\scoreboard',
    'events' => [
        ['class' => TopMenu::className(), 'event' => TopMenu::EVENT_INIT, 'callback' => ['humhub\modules\scoreboard\Events', 'onTopMenuInit']],
    ]
]

?>
