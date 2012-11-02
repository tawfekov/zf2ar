<?php
namespace zf2Ar ; 

class Module 
{
    public function __invoke()
    {
        $arabic = new \Arabic();
        return $arabic;
    }
}
