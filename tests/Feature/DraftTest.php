<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DraftTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_draft_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/draft');

        $response->assertStatus(200);
    }

    public function test_draft_create_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/draft');

        $response->assertStatus(200);
    }

    public function test_draft_creation(): void{
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post('/draft', [
            'title' => 'Test Draft',
            'description' => 'Test Description',
            'content' => 'Test Content',
        ]);

        $response->assertRedirect('/draft');
    }
}
