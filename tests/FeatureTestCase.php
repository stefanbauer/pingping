<?php

namespace Tests;

class FeatureTestCase extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        $this->withExceptionHandling();
    }
}
