<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_homepage_available()
    {
        $response = $this->get('/admin/dashboard');
        $response->assertStatus(200);
    }
    public function test_hotels_page()
    {
        $response = $this->get('/admin/hotels');
        $response->assertStatus(200);
    }
    public function test_bookings_page()
    {
        $response = $this->get('/admin/bookings');
        $response->assertStatus(200);
    }
}
