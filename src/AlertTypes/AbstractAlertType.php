<?php

namespace Xpressengine\Plugins\ErrorAlert\AlertTypes;

abstract class AbstractAlertType
{
    /**
     * @return bool
     */
    abstract public function checkUseAlert();

    /**
     * @return void
     */
    abstract public function sendAlert();
}