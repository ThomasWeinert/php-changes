<?php
trait FooBar {
  const FOO = 'foo';
  private const BAR = 'bar';
  final const BAZ = 'baz';
  final protected const QUX = 'qux';
}

class Test {
  use FooBar;
}

echo Test::BAZ; // 'bar'
