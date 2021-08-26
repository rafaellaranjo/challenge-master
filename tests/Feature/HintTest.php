<?php

use App\Models\User;
use Tests\TestCase;

class HintTest extends TestCase
{

    public function test_unauthenticated_can_access_hints()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertViewHasAll(['current_page', 'prev_page_url','next_page_url','data', 'from']);
    }

    public function test_user_can_access_creation()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/create');
        $response->assertStatus(200);
    }

    public function test_user_can_add_hints()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user, 'api')->post('/create', [
           'type' => 'Carro',
           'brand' => 'Ford',
           'model' => 'Fiesta',
           'version' => '',
           'hint' => 'Realy nice car, I realy like it or whatever'
        ]);
        $response->assertStatus(302);
    }
}
