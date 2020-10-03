<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;
use App\Author;
use App\Category;

class PostTest extends TestCase{
    public function test_add_comment_to_post()
    {
        $post = new Post();
        $comment = new Comment("Texto de prueba");
        $author = new Author("Jomilto","admin@email.com");
        $php = new Category("PHP");
        $laravel = new Category("Laravel");

        $post->title = "Nuevo Post";
        $post->content = "Mi primer Post";
        $post->author = $author;

        $post->addComment($comment);

        $post->addCategory($php);
        $post->addCategory($laravel);

        $this->assertEquals(1,$post->countComments());
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);

        $this->assertEquals("Nuevo Post",$post->title);
        $this->assertEquals("Jomilto",$post->author->getName());
        $this->assertEquals(2,$post->countCategories());
    }
}