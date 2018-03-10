<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\UnitTestCase;

class UserTest extends UnitTestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_services()
    {
        $user = factory(User::class)->make();

        $this->assertInstanceOf(Collection::class, $user->services);
    }
}
