<?php

namespace Xpressengine\Plugins\ErrorAlert\Exceptions;

use App\Exceptions\Handler;
use Exception;

class ErrorAlertExceptionHandler extends Handler
{
    public function report(Exception $exception)
    {
        //TODO alert 제외 예외 등록

        \Log::info('report');

        parent::report($exception);
    }
}
