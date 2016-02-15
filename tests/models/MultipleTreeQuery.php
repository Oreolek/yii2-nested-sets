<?php
/**
 * @link https://github.com/creocoder/yii2-nested-sets
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace tests\models;

use oreolek\nestedsets\NestedSetsQueryBehavior;

/**
 * MultipleTreeQuery
 */
class MultipleTreeQuery extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            NestedSetsQueryBehavior::className(),
        ];
    }
}
