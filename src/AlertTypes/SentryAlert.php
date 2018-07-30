<?php

namespace Xpressengine\Plugins\ErrorAlert\AlertTypes;

class SentryAlert extends AbstractAlertType
{
    /**
     * @return bool
     */
    public function checkUseAlert()
    {
        return false;
    }

    /**
     * @return void
     */
    public function sendAlert()
    {

    }
}
