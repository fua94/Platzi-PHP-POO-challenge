<?php

namespace App;

class Post
{
  private $author;
  private $content;

  public function __construct(Author $author, $content) {
    $this->author = $author;
    $this->content = $content;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function getContent()
  {
    return $this->content;
  }
}