<?php

use PHPUnit\Framework\TestCase;
use App\Category;

class CategoryTest extends TestCase{

    public function test_category()
    {
        $php = new Category("PHP");
        
        $this->assertEquals("PHP",$php->name);

    }
}