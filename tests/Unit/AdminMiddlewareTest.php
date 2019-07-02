<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminMiddlewareTest extends TestCase
{
    /** @test */
    public function non_admins_are_redirected()
    {
        $user = factory(User::class)->make(['is_admin' => false]);
        $this->actingAs($user);
        $request = Request::create('/admin', 'GET');
        $middleware = new AdminMiddleware;
        $response = $middleware->handle($request, function () {});
        $this->assertEquals($response->getStatusCode(), 302);
    }
    /** @test */
    public function admins_are_not_redirected()
    {
        $user = factory(User::class)->make(['is_admin' => true]);
        $this->actingAs($user);
        $request = Request::create('/admin', 'GET');
        $middleware = new AdminMiddleware;
        $response = $middleware->handle($request, function () {});
        $this->assertEquals($response, null);
    }
}
