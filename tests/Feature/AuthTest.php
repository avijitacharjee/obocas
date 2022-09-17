<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_route()
    {
        $response = $this->get('/signin');

        $response
            ->assertStatus(200)
            ->assertSee("Sign in");
    }
    public function test_registration()
    {
        $response = $this->post('/',["email"=>$this->faker->email]);
        $response
            ->assertStatus(201)
            ->assertRedirect('/')
            ->assertSessionHas('id',session('id'));
    }
}
