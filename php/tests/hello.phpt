--TEST--
echo - basic test for echo Jagaad Academy welcoming
--FILE--
<?php
require_once __DIR__ . '/../src/hello.php';
sayWelcome();
?>
--EXPECT--
Welcome to Jagaad Academy!