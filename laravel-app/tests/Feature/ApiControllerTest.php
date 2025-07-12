<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApiControllerTest extends TestCase
{
    use RefreshDatabase;

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_returns_api_status()
    {
        // Make a GET request to the status endpoint
        $response = $this->getJson('/api/status');

        // Assert the response status is 200 and contains the correct JSON
        $response->assertStatus(200)
            ->assertJson([
                'status' => 'API1 is working and was updated for Deployment!'
            ]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_creates_a_new_test_entry()
    {
        // Make a POST request to the store endpoint
        $response = $this->postJson('/api/store');

        // Assert the response status is 200
        $response->assertStatus(200)
            ->assertJsonStructure([
                'message',
                'data' => [
                    'id',
                    'name',
                    'created_at',
                    'updated_at'
                ]
            ]);

        // Assert the entry was created in the database
        $this->assertDatabaseHas('test_entries', [
            'name' => 'test 1'
        ]);
    }
}
