<?php

use Orchestra\Foundation\Testing\ApplicationTestCase;

abstract class TestCase extends ApplicationTestCase
{
    /**
     * Get base path.
     *
     * @return string
     */
    protected function getBasePath()
    {
        return realpath(__DIR__.'/../');
    }
}
