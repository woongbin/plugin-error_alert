<?php

namespace Xpressengine\Plugins\ErrorAlert\AlertTypes;

class SlackAlert extends AbstractAlertType
{
    /**
     * @return bool
     */
    public function checkUseAlert()
    {
        return false;
    }

    public function sendAlert()
    {

    }
}
