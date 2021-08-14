<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PropertyTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_property_view_screen_should_appear()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/properties');
        $response->assertStatus(200);
    }


}
