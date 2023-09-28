<?php

require __DIR__.'/vendor/autoload.php';

use App\Author;
use App\Post;
use App\Category;

$author1 = new Author('Francisco', 'reviewer');
$author2 = new Author('Juan', 'editor');
$post1 = new Post($author1, 'Prueba php 1');
$post2 = new Post($author2, 'Prueba php 2');
$post3 = new Post($author2, 'Prueba php 3');
$post4 = new Post($author2, 'Prueba vue 1');
$post5 = new Post($author1, 'Prueba vue 2');
$phpCategory = new Category('PHP');
$vueCategory = new Category('Vue');

$phpCategory->addPost($post1);
$phpCategory->addPost($post2);
$phpCategory->addPost($post3);
$vueCategory->addPost($post4);
$vueCategory->addPost($post5);

$allPosts = array_merge($phpCategory->getPosts(), $vueCategory->getPosts());

foreach($allPosts as $post)
{
  echo "<br>Contenido: {$post->getContent()}, author: {$post->getAuthor()->getName()}";
}