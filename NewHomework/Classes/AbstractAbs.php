<?php

namespace NewHomework\App\Classes;

abstract class AbstrAction
{
    abstract public function greetingYou($greeting);
}
class AbstractAbs extends AbstrAction {
    public function greetingYou($greeting)
    {
        echo $greeting;
    }
}
