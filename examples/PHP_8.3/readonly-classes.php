<?php
class Test {
  public function __construct(
    public readonly DateTime $bar
  ) {}

  public function __clone()
  {
    $this->bar = $this->bar; // Works
    $this->bar = clone $this->bar; // Doesn't work, an Error is thrown.
  }
}
