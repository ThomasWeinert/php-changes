<?php
$callable = "self::method";
$callable = "parent::method";
$callable = "static::method";
$callable = ["self", "method"];
$callable = ["parent", "method"];
$callable = ["static", "method"];
$callable = ["MyClass", "MyParentClass::myMethod"];
$callable = [new MyClass(), "MyOtherClass::myMethod"];
