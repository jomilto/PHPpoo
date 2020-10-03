<?php

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase{

    public function test_user()
    {
        $user = new User("Jomilto","admin@email.com");
        
        $this->assertEquals("Jomilto",$user->getName());
        $this->assertEquals("admin@email.com",$user->getEmail());

    }
}