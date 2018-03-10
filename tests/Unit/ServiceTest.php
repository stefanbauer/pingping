<?php

namespace Tests\Unit;

use App\Service;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\UnitTestCase;

class ServiceTest extends UnitTestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_an_owner()
    {
        $service = factory(Service::class)->create();

        $this->assertInstanceOf(User::class, $service->user);
    }

    /** @test */
    public function it_gets_services_by_specific_user()
    {
        $user = factory(User::class)->create();
        factory(Service::class)->create([
            'user_id' => $user->id,
        ]);

        factory(Service::class, 2)->create();

        $this->assertCount(1, Service::byUser($user)->get());
    }
}
