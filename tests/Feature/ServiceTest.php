<?php

namespace Tests\Feature;

use App\Service;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\FeatureTestCase;

class ServiceTest extends FeatureTestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_needs_to_be_authenticated_to_see_services()
    {
        $this->get('/services')->assertRedirect('/login');
    }

    /** @test */
    public function an_authenticated_user_can_see_services()
    {
        $this->login($user = factory(User::class)->create());
        $service = factory(Service::class)->create([
            'user_id' => $user->id,
        ]);

        $this->get('/services')->assertSee($service->url);
    }

    /** @test */
    public function an_authenticated_user_can_not_see_services_he_doesnt_own()
    {
        $this->login();

        $aDifferentService = factory(Service::class)->create();

        $this->get('/services')->assertDontSee($aDifferentService->url);
    }
}
