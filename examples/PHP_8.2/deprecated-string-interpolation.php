<?php
// deprecated
echo "Hello ${name}";
echo "Hello ${$var}";
// allowed
echo "Hello {$name}";
echo "Hello {$$var}";
