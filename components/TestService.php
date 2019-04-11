<?php
/**
 * Created by PhpStorm.
 * User: dantemgs
 * Date: 11.04.2019
 * Time: 17:35
 */

namespace app\components;


use yii\base\Component;

class TestService extends Component
{
    public  $prop = 'СТАНДАРТНОЕ';

    public function getProp (){
        return $this->prop;
    }

}