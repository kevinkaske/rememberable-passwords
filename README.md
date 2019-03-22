# Rememberable Passwords
A simple PHP lib to generate simple random temporary passwords for new users to an app. This is helpful when an admin is setting users up VS having people sign up to use your application.

## Install via composer
Installation of rememberable passwords is through [composer](https://getcomposer.org).

To get started quickly, run the following command
```bash
composer require kevinkaske/rememberable-passwords
```

## Usage
```php
getRememberablePassword();
```

#### Example 1:
```php
echo getRememberablePassword();
```
Might output ```SmartFlute133```
