<?php
json_validate('{ "foo": "bar", }');

// Syntax error
echo json_last_error_msg();
