<?php

namespace ZF2ar\View\Helper;

use Zend\View\Helper\AbstractHelper;

class IsFemale  extends AbstractHelper {

    public function __construct() {
        
    }

    public function __invoke($name) {
        if ($name !== "") {
            $gender = new \Arphp\Gender();
            return $gender->isFemale($name);
        } else {
            return FALSE;
        }
    }

}
