<?php

namespace Xpressengine\Plugins\ErrorAlert\Providers;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\ServiceProvider;
use Xpressengine\Plugins\ErrorAlert\Exceptions\ErrorAlertExceptionHandler;

class ErrorAlertProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind(ExceptionHandler::class, ErrorAlertExceptionHandler::class);
    }
}
