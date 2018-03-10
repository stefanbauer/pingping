<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function login(?User $user = null)
    {
        $this->actingAs($user ?: factory(User::class)->create());

        return $this;
    }
}
