Instalation
----------------

Install [Composer](https://getcomposer.org):

```bash
wget https://raw.githubusercontent.com/composer/getcomposer.org/1b137f8bf6db3e79a38a5bc45324414a6b1f9df2/web/installer -O - -q | php -- --quiet
```

Make composer global command:

```bash
mv composer.phar /usr/bin/composer
```

Clone [repository with test]():

```bash
git clone git@github.com:klimychevmn/githubTesting.git
cd githubTesting
```

Install all dependencies:
```bash
composer install
```

Configure
----------------
replace this mocks in /test/acceptance/---Cept.php files
@your_email@ - your github email
@your_pass@ - your github password
@your_nickname@ - your github nickname


Run tests
----------------

Run all tests:
```bash
vendor/bin/codecept run
```

Run tests with debug option:
```bash
vendor/bin/codecept run --debug
```

Run tests step by step:
```bash
vendor/bin/codecept run --steps
```

Run acceptance tests:
```bash
vendor/bin/codecept run acceptance
```

Run all tests with composer:
```bash
composer test
```
