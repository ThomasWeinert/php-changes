<?php
class User {
  public $name;
}
$user = new User;
// Assigns declared property User::$name.
$user->name = "foo";
// Oops, a typo:
$user->nane = "foo";
// PHP <= 8.1: Silently creates dynamic $user->nane property.
// PHP    8.2: Raises deprecation warning, still creates dynamic property.
// PHP    9.0: Throws Error exception.
