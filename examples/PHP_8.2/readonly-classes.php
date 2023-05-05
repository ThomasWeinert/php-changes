<?php
// 8.2
readonly class User {
  public string $username;
  public string $uid;
}

// 8.1
class User {
  public readonly int $uid;
  public readonly string $username;
}
