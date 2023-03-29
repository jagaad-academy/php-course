# Running the test file 🥷🐘

This is the way PHP internal run the tests. See [Running the test suite](https://www.phpinternalsbook.com/tests/running_the_test_suite.html) in the PHP Internals Book.

*Version: PHP 8.2*

### Commands 

````
$ wget https://raw.githubusercontent.com/php/php-src/php-8.2.4/run-tests.php
$ php run-tests.php -P tests/hello.phpt
````

### Output

```
=====================================================================
Running selected tests.
PASS echo - basic test for echo Jagaad Academy welcoming [tests/hello.phpt] 
=====================================================================
Number of tests :    1                 1
Tests skipped   :    0 (  0.0%) --------
Tests warned    :    0 (  0.0%) (  0.0%)
Tests failed    :    0 (  0.0%) (  0.0%)
Tests passed    :    1 (100.0%) (100.0%)
---------------------------------------------------------------------
Time taken      :    0 seconds
=====================================================================
```
