<?php

use PHPUnit\Framework\TestCase;
use App\Author;
use App\Post;
use App\Category;

class PostTest extends TestCase
{
  public function test_add_post_to_category()
  {
    $reviewer = new Author('', 'reviewer');
    $editor = new Author('', 'editor');
    $post1 = new Post($reviewer, '');
    $post2 = new Post($editor, '');
    $category = new Category('');

    $category->addPost($post1);
    $category->addPost($post2);

    $this->assertEquals(1, count($category->getPosts()));
  }
}