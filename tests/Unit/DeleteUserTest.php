<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
        $user = new User();

        $user->email = 'Ron@gmail.com';
        $user->password = 'adelaide';

        $this->assertTrue($user->save());
    }
        public function testDeleteUser()
    {
        $user = new User();
        //$user->name = 'Mr. Walker Barton';
        $user->email = 'stehr.kaitlin@example.com';
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $user->save();
        $this->assertTrue($user->delete());
    }


    }

