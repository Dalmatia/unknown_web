<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LogoutApiTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        // テストユーザー作成
        // ※Laravel8から$this->user = factory(User::class)->create();ではなく、
        //            ->$this->user = User::factory()->create();
        $this->user = User::factory()->create();
    }

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function LogoutApiTest()
    {
        $response = $this->actingAs($this->user)
            ->json('POST', route('logout'));

        $response->assertStatus(200);
        $this->assertGuest();
    }
}
