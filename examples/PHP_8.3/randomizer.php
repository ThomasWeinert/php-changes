<?php
$randomizer = new \Random\Randomizer();

var_dump(
  $randomizer->getBytesFromString('abcdefghijklmnopqrstuvwxyz0123456789', 16)
); // string(16) "xfhnr0z6ok5fdlbz"
var_dump(sprintf(
  "Lat: %+.6f Lng: %+.6f",
  $randomizer->getFloat(-90, 90, \Random\IntervalBoundary::ClosedClosed),
  $randomizer->getFloat(-180, 180, \Random\IntervalBoundary::OpenClosed),
)); // string(32) "Lat: -51.742529 Lng: +135.396328"
var_dump(
  $randomizer->nextFloat()
); // A random float, such that $float >= 0 && $float < 1.
