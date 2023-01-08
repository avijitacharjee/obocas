<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class PartnerTest extends TestCase
{
    use WithFaker, WithoutMiddleware;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_partner_index()
    {
        $response = $this->get('partner/index');

        $response->assertStatus(200);
    }
    public function test_partner_signup_page()
    {
        $response = $this->get('partner/signup');
        $response->assertStatus(200);
    }
    public function test_partner_signup_post()
    {
        $firstname = $this->faker->firstName;
        $lastname = $this->faker->lastName;
        $email = $this->faker->safeEmail;
        $password = Hash::make('654321');

        $this->withoutMiddleware();

        $response = $this->post('partner/signup',[
            $firstname,
            $lastname,
            $email,
            $password
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('partners',[
            'email'=>$email
        ]);
    }
}
