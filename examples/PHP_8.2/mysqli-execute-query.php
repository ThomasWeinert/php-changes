<?php
$query = 'SELECT uid, username FROM users WHERE uid = ?';
$result = $mysqli->execute_query($sql, [$uid]);
