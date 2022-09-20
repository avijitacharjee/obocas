<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HotelAdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_homepage()
    {
        $response = $this->get('/hotel-admin/dashboard');

        $response->assertStatus(200);
    }
    public function test_hotel_admin_signin_page()
    {
        $response = $this->get('/hotel-admin/signin');
        $response->assertStatus(200);
    }
}
