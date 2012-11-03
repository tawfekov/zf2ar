<?php
namespace ZF2ar ; 

class Module 
{
    public function __invoke()
    {
        $arabic = new Arabic();
        return $arabic;
    }
}
