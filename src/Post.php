<?php

namespace App;

class Post{

    protected $comments = [];
    protected $categories = [];
    public $title;
    public $content;
    public $author;

    public function addComment(Comment $comment)
    {
        array_push($this->comments,$comment);
    }

    public function countComments()
    {
        return count($this->comments);
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function addCategory(Category $category)
    {
        array_push($this->categories,$category);
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function countCategories()
    {
        return count($this->categories);
    }
}