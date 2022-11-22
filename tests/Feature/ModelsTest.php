<?php

namespace Tests\Feature;

use App\Models\Address;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ModelsTest extends TestCase
{
    use RefreshDatabase;

    public function testUserModel()
    {
        $user = User::factory()->create();
        $this->assertModelExists($user);
    }

    public function testAddressModel()
    {
        User::factory()->create();
        $address = Address::factory()->create();
        $this->assertModelExists($address);
    }

    public function testProfileModel()
    {
        User::factory()->create();
        $profile = Profile::factory()->create();
        $this->assertModelExists($profile);
    }
}
