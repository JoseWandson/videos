<?php

namespace AppBundle\Service;

/**
 * Created by PhpStorm.
 * User: Wandson
 * Date: 04/06/2018
 * Time: 23:39
 */
class Bold {

    public function bold($string) {
        return '<strong>' . $string . '</strong>';
    }

}