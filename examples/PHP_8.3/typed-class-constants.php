<?php
enum E {
  const string TEST = "Test1";
}
trait T {
  const string TEST = E::TEST;
}
interface I {
  const string TEST = E::TEST;
}
interface C {
  const string TEST = E::TEST;
}

class Foo implements I {
  use T;
  const string TEST = E::TEST;
}

class Bar extends Foo {
  const string TEST = "Test2";
}
