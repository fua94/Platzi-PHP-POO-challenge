<?php

namespace App;

class Author extends UserBase
{
  private $role;

  public function __construct($name, $role) {
    parent::__construct($name);
    $this->role = $role;
  }

  public function letWrite()
  {
    return $this->role == 'editor';
  }
}