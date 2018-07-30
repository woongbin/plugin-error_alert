<?php

namespace Xpressengine\Plugins\ErrorAlert\Controllers;

use XeConfig;
use XePresenter;
use App\Http\Controllers\Controller;
use Xpressengine\Plugins\ErrorAlert\Plugin;

class SettingController extends Controller
{
    protected $view = 'error_alert::views.setting';

    public function getSetting()
    {
        $config = XeConfig::get(Plugin::CONFIG_NAME);

        if ($config == null) {
            $config = XeConfig::set(Plugin::CONFIG_NAME, []);
        }

        return XePresenter::make($this->view, compact('config'));
    }
}
