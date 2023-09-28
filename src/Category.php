<?php

namespace App;

class Category
{
  private $posts = [];
  private $slug;

  public function __construct($slug) {
    $this->slug = $slug;
  }

  public function addPost(Post $post)
  {
    if($post->getAuthor()->letWrite())
    {
      $this->posts[] = $post;
    }
  }

  public function getPosts()
  {
    return $this->posts;
  }

  public function getSlug()
  {
    return $this->slug;
  }
}