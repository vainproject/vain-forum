<?php

namespace Modules\Forum\Test;

use Orchestra\Testbench\TestCase as Orchestra;
use Modules\Forum\Providers\ForumServiceProvider;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            // maybe VainServiceProvider::class is necessary, too?
            ForumServiceProvider::class,
        ];
    }
}