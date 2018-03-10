<?php

namespace Tests;

class UnitTestCase extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        $this->withoutExceptionHandling();
    }
}
