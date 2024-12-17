<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DonationControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_donation_form_can_be_rendered()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_donation_can_be_created()
    {
        $response = $this->postJson('/donation/create-order', [
            'amount' => 10.00,
        ]);

        $response->assertStatus(200)
                 ->assertJsonStructure(['id']);

        $this->assertDatabaseHas('donations', [
            'amount' => 10.00,
            'status' => 'pending',
        ]);
    }

    public function test_donation_fails_with_invalid_amount()
    {
        $response = $this->postJson('/donation/create-order', [
            'amount' => 0,
        ]);

        $response->assertStatus(422);
    }
}

