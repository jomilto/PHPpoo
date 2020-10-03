<?php

use PHPUnit\Framework\TestCase;
use App\Author;

class AuthorTest extends TestCase{

    public function test_author()
    {
        $author = new Author("Jomilto","admin@email.com");
        
        $this->assertEquals("Jomilto",$author->getName());
        $this->assertEquals("admin@email.com",$author->getEmail());

    }
}