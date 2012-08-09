phar-coverage-test
==================

Temporary for testing


## How to run

    phpunit --coverage-clover coverage.xml BankAccountTest
    
This will produce the file coverage.xml with no coverage of the code in BankAccount.php. If the require line in this class is commented out, the report will be as expected.
The phar was created with the phar.phar.bat command in the php directory.

I also included a test for XDebug, which seems to work.

    php XDebugTest.php
    
will output coverage information from both the file itself, and from the included file in the phar.