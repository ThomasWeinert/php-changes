<?php
function passwordHash(#[\SensitiveParameter] string $password)  {
  debug_print_backtrace();
}
passwordHash('hunter2');
/*
array(1) {
  [0]=> array(4) {
    ["file"]=> string(38) "..."
    ["line"]=> int(9)
    ["function"]=> string(3) "foo"
    ["args"]=> array(1) {
       [0]=> object(SensitiveParameterValue)#1 (0) {}
    }
  }
}
*/
