<?php
class Foo {
  const BAR = 'bar';
}
$bar = 'BAR';

echo Foo::{$bar};
