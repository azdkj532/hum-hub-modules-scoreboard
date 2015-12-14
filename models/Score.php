<?php

namespace humhub/modules/scoreboard;

use Yii;
use humhub\modules\user\models\User;
use humhub\components\ActiveRecord;

class Score extends ActiveRecord
{
    public static function tableName()
    {
        return 'Scoreboard';
    }

    public function rules()
    {
        return [];
    }
    public function attributeLabels()
    {
        return Array(
            'total_coins' => 'Total Coins',
            'last_obtain' => 'Last Obtain',
        );
    }
}

