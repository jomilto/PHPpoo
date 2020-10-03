<?php
    require "vendor/autoload.php";

    use App\Post;
    use App\Comment;
    use App\Author;
    use App\Category;

    $post = new Post();
    $comment = new Comment("Texto de prueba");
    $author = new Author("Jomilto","admin@email.com");
    $php = new Category("PHP");
    $laravel = new Category("Laravel");

    $post->title = "Nuevo Post";
    $post->content = "Mi primer Post para validar mi codigo";
    $post->author = $author;

    $post->addComment($comment);

    $post->addCategory($php);
    $post->addCategory($laravel);
?>