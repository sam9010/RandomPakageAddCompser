<?php
/**
 * Created by PhpStorm.
 * User: gheibipour
 * Date: 11/28/2018
 * Time: 1:43 PM
 */

namespace Random;

class Random
{

    public function getRandom()
    {
        $ran = rand(10,100);
        return $ran;
    }

}
