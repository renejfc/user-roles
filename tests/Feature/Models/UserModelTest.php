<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserModelTest extends TestCase
{
    use RefreshDatabase;

    public $modelTable;

    public function setUp() :void
    {
        parent::setUp();
        $this->modelTable = 'users';
    }

    public function testUserCanPersistInDatabase()
    {
        User::factory()->create();

        $this->assertDatabaseCount($this->modelTable, 1);
    }

    public function testMultipleUsersCanPersistInDatabase()
    {
        $usersCount = 5;

        User::factory()->count($usersCount)->create();

        $this->assertDatabaseCount($this->modelTable, $usersCount);
    }
}
